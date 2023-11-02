
@extends('admin.layout.sidebar')
@php
    $admin = session('admin')
@endphp
<input type="text" id="email-send" value="{{$admin->email}}" style="display: none">
@section('container')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div style="position: absolute; left: 120px; top: 70px;">
        <div style="width: 1200px" class="container">
            <div class="panel messages-panel">
                <div class="contacts-list">
                    <div class="tab-content">
                        <div id="inbox" class="contacts-outter-wrapper tab-pane active">
                            <form class="panel-search-form info form-group has-feedback no-margin-bottom">
                                <input type="text" class="form-control" name="search" placeholder="Search">

                            </form>
                            <div class="contacts-outter">
                                <ul class="list-unstyled contacts">
                                    @foreach($users as $user)
                                    <li data-toggle="tab" data-target="{{$user->id}}tablist" class="user-tab">
                                        <input type="text" id="email-input-{{$user->id}}" value="{{$user->email}}" style="display: none">
                                        <img alt class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                                        <div class="vcentered info-combo">
                                            <h3 class="no-margin-bottom name" style="font-weight: bold">{{$user->name}} </h3>
                                        </div>
                                        <div class="contacts-add">
                                            <span class="message-time"> 2:32 <sup>AM</sup></span>
                                            <i class="fa fa-trash-o"></i>
                                            <i class="fa fa-paperclip"></i>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    @foreach($users as $user)
                        <div class="tab-pane message-body" id="{{$user->id}}tablist"  style="display: none;">
                            <div class="message-top">
                                <a class="btn btn btn-success new-message"> <i class="fa fa-envelope"></i> New Message </a>
                                <div class="new-message-wrapper">
                                </div>
                            </div>
                            <div class="message-chat">
                                <div class="chat-body">
                                </div>
                                <div class="chat-footer">
                                    <textarea id="{{$user->id}}send-message-text" class="send-message-text"></textarea>
                                    <button type="button" id="{{$user->id}}send-message" class="send-message-button btn-info"> <i class="fa fa-send"></i> </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            // Lấy tất cả các user-tabs và message-tabs
            const userTabs = document.querySelectorAll(".user-tab");
            const messageTabs = document.querySelectorAll(".tab-pane.message-body");
            var recipientEmail;



            var buttonSend = document.getElementById('send-message');
            // Hiển thị message-tab đầu tiên khi trang được tải
            messageTabs[0].style.display = "block";

            // Xử lý sự kiện khi người dùng nhấp vào user-tab
            userTabs.forEach(function(userTab, index) {
                userTab.addEventListener("click", function() {
                    // Ẩn tất cả message-tabs
                    messageTabs.forEach(function(tab) {
                        tab.style.display = "none";
                    });

                    // Lấy giá trị data-target từ user-tab để hiển thị message-tab tương ứng
                    const targetId = this.getAttribute("data-target");
                    const messageTab = document.getElementById(targetId);
                    if (messageTab) {
                        messageTab.style.display = "block";
                    }
                    // Lấy giá trị email từ trường input ẩn
                    const emailInputId = "email-input-" + targetId.replace("tablist", "");
                    const emailInput = document.getElementById(emailInputId);
                    recipientEmail = emailInput.value;
                });
            });
            buttonSend.addEventListener('click', function () {

                var textarea = document.getElementById("send-message-text"); // Get the textarea element by its id
                var textareaValue = textarea.value;
                var adminSend = document.getElementById("email-send").value;

                if (textareaValue.length > 0) {

                    fetch('/api/admin/messager', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            user_to: recipientEmail,
                            user_send: adminSend,
                            content_message: textareaValue ,

                        })
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data && data.message) {
                                // Tạo một phần tử HTML mới cho tin nhắn
                                var newMessage = document.createElement('div');
                                newMessage.className = 'message my-message';
                                newMessage.innerHTML = `
                    <img alt class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                    <div class="message-body">
                        <div class="message-body-inner">
                            <div class="message-info">
                                <h4>${adminSend}</h4>
                                <h5> <i class="fa fa-clock-o"></i> ${new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' })} </h5>
                            </div>
                            <hr>
                            <div class="message-text">${textareaValue}</div>
                        </div>
                    </div>
                    <br>
                `;

                                // Thêm phần tử HTML mới vào phần tử hiển thị tin nhắn
                                var chatBody = document.querySelector(".chat-body");
                                chatBody.appendChild(newMessage);

                                // Xóa nội dung trong textarea sau khi gửi tin nhắn
                                textarea.value = '';
                            }
                        })
                        .catch(error => {
                            // Xử lý lỗi (nếu có)
                            console.error(error);
                        });
                }
            })
        });

    </script>
@endsection()
