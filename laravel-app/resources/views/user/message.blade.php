
@extends('user.layout.sidebar')
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
                                    <li data-toggle="tab" data-target="#inbox-message-1" class="active">
                                        <div class="message-count"> 1 </div>
                                        <img alt class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                                        <div class="vcentered info-combo">
                                            <h3 class="no-margin-bottom name"> Bác Sĩ Cường </h3>
                                            <h5> Tôi có thể hỗ trợ gì được cho bạn </h5>
                                        </div>
                                        <div class="contacts-add">
                                            <span class="message-time"> 2:32 <sup>AM</sup></span>
                                            <i class="fa fa-trash-o"></i>
                                            <i class="fa fa-paperclip"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="sent" class="contacts-outter-wrapper tab-pane">
                            <form class="panel-search-form success form-group has-feedback no-margin-bottom">
                                <input type="text" class="form-control" name="search" placeholder="Search">
                            </form>
                            <div class="contacts-outter">
                                <ul class="list-unstyled contacts success">
                                    <li data-toggle="tab" data-target="#sent-message-1">
                                        <img alt class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                                        <div class="vcentered info-combo">
                                            <h3 class="no-margin-bottom name"> David Beckham </h3>
                                            <h5> I would like to take a look at it this evening, is it possible ? </h5>
                                        </div>
                                        <div class="contacts-add">
                                            <span class="message-time"> 2:24 <sup>AM</sup></span>
                                            <i class="fa fa-trash-o"></i>
                                            <i class="fa fa-paperclip"></i>
                                        </div>
                                    </li>
                                    <li data-toggle="tab" data-target="#sent-message-2">
                                        <div class="message-count"> 7 </div>
                                        <img alt class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                                        <div class="vcentered info-combo">
                                            <h3 class="no-margin-bottom name"> Jeff Williams </h3>
                                            <h5> Hello, Dennis. I will take a look at it tomorrow, because I'm </h5>
                                        </div>
                                        <div class="contacts-add">
                                            <span class="message-time"> 12:41 <sup>AM</sup></span>
                                            <i class="fa fa-trash-o"></i>
                                            <i class="fa fa-paperclip"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="marked" class="contacts-outter-wrapper tab-pane">
                            <form class="panel-search-form warning form-group has-feedback no-margin-bottom">
                                <input type="text" class="form-control" name="search" placeholder="Search">
                            </form>
                            <div class="contacts-outter">
                                <ul class="list-unstyled contacts warning">
                                    <li data-toggle="tab" data-target="#marked-message-1">
                                        <div class="message-count"> 2 </div>
                                        <img alt class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                                        <div class="vcentered info-combo">
                                            <h3 class="no-margin-bottom name"> Jessica Franco </h3>
                                            <h5> Hello, Dennis. I wanted to let you know we reviewed your proposal and decided </h5>
                                        </div>
                                        <div class="contacts-add">
                                            <span class="message-time"> 1:44 <sup>AM</sup></span>
                                            <i class="fa fa-trash-o"></i>
                                            <i class="fa fa-paperclip"></i>
                                        </div>
                                    </li>
                                    <li data-toggle="tab" data-target="#marked-message-2">
                                        <div class="message-count"> 1 </div>
                                        <img alt class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                                        <div class="vcentered info-combo">
                                            <h3 class="no-margin-bottom name"> Pavel Durov </h3>
                                            <h5> Hey, we need your help for our next Telegram re-design. </h5>
                                        </div>
                                        <div class="contacts-add">
                                            <span class="message-time"> 3:23 <sup>AM</sup></span>
                                            <i class="fa fa-trash-o"></i>
                                            <i class="fa fa-paperclip"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="drafts" class="contacts-outter-wrapper tab-pane">
                            <form class="panel-search-form dark form-group has-feedback no-margin-bottom">
                                <input type="text" class="form-control" name="search" placeholder="Search">
                            </form>
                            <div class="contacts-outter">
                                <ul class="list-unstyled contacts dark">
                                    <li data-toggle="tab" data-target="#draft-message-1">
                                        <img alt class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                                        <div class="vcentered info-combo">
                                            <h3 class="no-margin-bottom name"> Milla Shiffman </h3>
                                            <h5> Hello, Mila, can you send me the latest pack of icons, I need </h5>
                                        </div>
                                        <div class="contacts-add">
                                            <span class="message-time"> 4:22 <sup>AM</sup></span>
                                            <i class="fa fa-trash-o"></i>
                                            <i class="fa fa-paperclip"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane message-body active" id="inbox-message-1">
                        <div class="message-top">
                            <a class="btn btn btn-success new-message"> <i class="fa fa-envelope"></i> New Message </a>
                            <div class="new-message-wrapper">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Send message to...">
                                    <a class="btn btn-danger close-new-message" href="#"><i class="fa fa-times"></i></a>
                                </div>
                                <div class="chat-footer new-message-textarea">
                                    <textarea class="send-message-text"></textarea>
                                    <label class="upload-file">
                                        <input type="file" required>
                                        <i class="fa fa-paperclip"></i>
                                    </label>
                                    <button type="button" class="send-message-button btn-info"> <i class="fa fa-send"></i> </button>
                                </div>
                            </div>
                        </div>
                        <div class="message-chat">
                            <div class="chat-body">
                                <div class="message info">
                                    <img alt class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                                    <div class="message-body">
                                        <div class="message-info">
                                            <h4> Elon Musk </h4>
                                            <h5> <i class="fa fa-clock-o"></i> 2:25 PM </h5>
                                        </div>
                                        <hr>
                                        <div class="message-text">
                                            I've seen your new template, Dauphin, it's amazing !
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div class="message my-message">
                                    <img alt class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                                    <div class="message-body">
                                        <div class="message-body-inner">
                                            <div class="message-info">
                                                <h4> Dennis Novac </h4>
                                                <h5> <i class="fa fa-clock-o"></i> 2:28 PM </h5>
                                            </div>
                                            <hr>
                                            <div class="message-text">
                                                Thanks, I think I will use this for my next dashboard system.
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div class="message info">
                                    <img alt class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                                    <div class="message-body">
                                        <div class="message-info">
                                            <h4> Elon Musk </h4>
                                            <h5> <i class="fa fa-clock-o"></i> 2:32 PM </h5>
                                        </div>
                                        <hr>
                                        <div class="message-text">
                                            Hah, too late, I already bought it and my team is impleting the new design right now.
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <div class="chat-footer">
                                <textarea class="send-message-text"></textarea>
                                <label class="upload-file">
                                    <input type="file" required>
                                    <i class="fa fa-paperclip"></i>
                                </label>
                                <button type="button" class="send-message-button btn-info"> <i class="fa fa-send"></i> </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        const pusher  = new Pusher('{{config('broadcasting.connections.pusher.key')}}', {cluster: 'eu'});
        const channel = pusher.subscribe('public');

        //Receive messages
        channel.bind('chat', function (data) {
            $.post("/receive", {
                _token:  '{{csrf_token()}}',
                message: data.message,
            })
                .done(function (res) {
                    $(".messages > .message").last().after(res);
                    $(document).scrollTop($(document).height());
                });
        });

        //Broadcast messages
        $("form").submit(function (event) {
            event.preventDefault();

            $.ajax({
                url:     "/broadcast",
                method:  'POST',
                headers: {
                    'X-Socket-Id': pusher.connection.socket_id
                },
                data:    {
                    _token:  '{{csrf_token()}}',
                    message: $("form #message").val(),
                }
            }).done(function (res) {
                $(".messages > .message").last().after(res);
                $("form #message").val('');
                $(document).scrollTop($(document).height());
            });
        });

    </script>
@endsection()
