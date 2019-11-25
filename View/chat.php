<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="public/assets/css/connected.css" type="text/css">
    <title>Test Hiit Consulting</title>

</head>

<body>



<div class="container  ">
    <div class="row">
        <div class="col-md-4 marketing">
            <h4>Ulisateurs en ligne</h4>
            <ul id="usersConnected" data-url="index.php?ctrl=user&act=connected" class="list-group" style="height: 300px;overflow-y: auto;">
                <?php include_once 'usersconnected.php'; ?>
            </ul>
        </div>
        <div class="col-md-8 ">
            <div class="portlet portlet-default">
                <div class="portlet-heading">
                    <div class="portlet-title">
                        <h4><i class="fa fa-circle text-green"></i> <?php echo $user->getUsername(); ?></h4>
                    </div>
                    
                    <div class="portlet-widgets">
                        <div class="btn-group">
                            <a href="index.php?act=logout&ctrl=user" class="color_dec btn btn-white">Déconnexion</a>                            
                        </div>
                        <span class="divider"></span>
                        <a data-toggle="collapse" data-parent="#accordion" href="#chat"><i class="fa fa-chevron-down"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="chat" class="panel-collapse collapse in">
                    <div>
                    <div class="portlet-body chat-widget" style="overflow-y: auto; width: auto; height: 600px;" data-url="index.php?ctrl=message&act=refresh" id="msgs">
                        <?php
                        foreach ($messages as $msg){
                            echo '
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle img-chat" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">'.$msg->getUser()->getUsername().'
                                                <span class="small pull-right">'.$msg->getDate()->format('d/m/Y H:i').'</span>
                                            </h4>
                                           <p data-id="'.$msg->getId().'"><span class="msg">'.$msg->getContenu().'</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        ';
                        }
                        ?>
                    </div>
                    </div>
                    <div class="portlet-footer form">
                        <form method="POST" id="MessageForm" action="index.php?act=create&ctrl=message">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Enter message..." id="contenu" name="contenu"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default pull-right">Send</button>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 -->
    </div>
</div>                

<script type="text/javascript" src="public/jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="public/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/assets/js/script.js"></script>
</body>
</html>
