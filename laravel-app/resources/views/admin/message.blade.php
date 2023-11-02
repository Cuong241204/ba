
@extends('admin.layout.sidebar')
@php
    $admin = session('admin')
@endphp
<input type="text" id="email-send" value="{{$admin->email}}" style="display: none">
@section('container')
    @section('userData')
        <div class="user-data">{{$admin->name}}</div>
    @endsection
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
                                            <span class="message-time">{{$user->updated_at->format('H:i')}}</span>
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
                                    <textarea id="{{$user->id}}" class="send-message-text"></textarea>
                                    <button type="button" data-user-id="{{$user->id}}" class="send-message-button btn-info"> <i class="fa fa-send"></i> </button>
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
            var adminSend = document.getElementById("email-send").value;
            // Lấy tất cả các user-tabs và message-tabs
            const userTabs = document.querySelectorAll(".user-tab");
            const messageTabs = document.querySelectorAll(".tab-pane.message-body");
            var recipientEmail;


            var buttonsSend = document.querySelectorAll('.send-message-button');
            // Hiển thị message-tab đầu tiên khi trang được tải
            messageTabs[0].style.display = "block";

            // Xử lý sự kiện khi người dùng nhấp vào user-tab
            userTabs.forEach(function (userTab, index) {
                userTab.addEventListener("click", function () {
                    // Ẩn tất cả message-tabs
                    messageTabs.forEach(function (tab) {
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
                    fetch('/api/admin/getallmessage/' + adminSend + '/' + recipientEmail, {
                        method: 'get',
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json(); // Parse JSON if the response is successful
                    })
                    .then(data => {
                        if (data && data.messages) {
                            const messages = data.messages;
                            var chatBodyId = `${userId}tablist`;
                            const chatBody = messageTab.querySelector('.chat-body');

                            // Clear the existing messages
                            chatBody.innerHTML = '';

                            messages.forEach(message => {
                                // Create an HTML element for each message
                                const messageElement = document.createElement('div');
                                messageElement.className = 'message info';

                                // You can customize the message rendering as needed
                                messageElement.innerHTML = `
                                    <img alt class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                                    <div class="message-body">
                                        <div class="message-info">
                                            <h4> ${recipientEmail} </h4>
                                            <h5> <i class="fa fa-clock-o"></i> ${new Date().toLocaleTimeString('en-US', {
                                                hour: '2-digit',
                                                minute: '2-digit'
                                            })} </h5>
                                        </div>
                                        <hr>
                                        <div class="message-text">
                                              ${message.content_message}
                                        </div>
                                    </div>
                                    <br>
                               `;

                                // Append the message to the chat body
                                chatBody.appendChild(messageElement);
                            });
                        }
                    })
                    .catch(error => {
                        // Handle any errors, including network errors and parsing errors
                        console.error("API Error:", error);

                        // If the response contains an error message, you can access it like this
                        response.text().then(errorMessage => {
                            console.error("API Error Message:", errorMessage);
                        });
                    });
                });
            })

            buttonsSend.forEach(function (buttonSend) {
                buttonSend.addEventListener('click', function () {
                    // var textarea = document.getElementById("send-message-text"); // Get the textarea element by its id
                    // var textareaValue = textarea.value;
                    var userId = this.getAttribute('data-user-id');

                    // Find the corresponding textarea using the user's ID
                    var textarea = document.getElementById(userId);

                    // Get the value of the textarea
                    var messageText = textarea.value;

                    // Now you can work with the message text

                    if (messageText.length > 0) {

                        fetch('/api/admin/messager', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({
                                user_to: recipientEmail,
                                user_send: adminSend,
                                content_message: messageText,

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
                                                    <h5> <i class="fa fa-clock-o"></i> ${new Date().toLocaleTimeString('en-US', {
                                                            hour: '2-digit',
                                                            minute: '2-digit'
                                                        })} </h5>
                                                </div>
                                                <hr>
                                                <div class="message-text">${messageText}</div>
                                            </div>
                                        </div>
                                        <br>
                                    `;

                                    var chatBodyId = `${userId}tablist`; // Assuming recipientEmail corresponds to the user's ID

                                    // Append the new message to the user's chat-body by ID
                                    var chatBody = document.getElementById(chatBodyId);
                                    if (chatBody) {
                                        chatBody.querySelector('.chat-body').appendChild(newMessage);
                                    }

                                    // Clear the textarea after sending the message
                                    textarea.value = '';
                                }
                            })
                            .catch(error => {
                                // Xử lý lỗi (nếu có)
                                console.error(error);
                            });
                    }
                })
            })
        })


    </script>
@endsection()
