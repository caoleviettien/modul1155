<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-25-34">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-10">                       
                <div class="row content3">
                    <div class="col-md-6">                        
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel3">
                            <div class="x_title">
                                <h2><i class="fa fa-bars"></i> Vertical Tabs <small>Float Right</small><span>Float Center</span> <h5>Float Left</h5></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a id="turn" data-toggle="collapse" href="#element3"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a id="close-link3"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div id="element3">
                                <div class="col-xs-9">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home1">
                                            <p class="lead">Home tab</p>
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                                            synth. Cosby sweater eu banh mi, qui irure terr.</p>
                                        </div>
                                        <div class="tab-pane" id="profile1">
                                            <p class="lead">Profile tab</p>
                                            <p>This is profile tag.</p>
                                        </div>
                                        <div class="tab-pane" id="messages1">
                                            <p class="lead">Messages tab</p>
                                            <p>This is messages tab.</p>
                                        </div>
                                        <div class="tab-pane" id="settings1">
                                            <p class="lead">Settings</p>
                                            <p>This is Settings.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-3">
                                    <ul class="nav nav-tabs tabs-right">
                                        <li class="active"><a href="#home1" data-toggle="tab">Home</a>
                                        </li>
                                        <li><a href="#profile1" data-toggle="tab">Profile</a>
                                        </li>
                                        <li><a href="#messages1" data-toggle="tab">Messages</a>
                                        </li>
                                        <li><a href="#settings1" data-toggle="tab">Settings</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>