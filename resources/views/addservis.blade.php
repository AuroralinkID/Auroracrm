@extends('crudbooster::admin_template')
@section('content')

    @push('head')
        <style type="text/css">
            body.dragging, body.dragging * {
                cursor: move !important;
            }

            .dragged {
                position: absolute;
                opacity: 0.7;
                z-index: 2000;
            }

            .draggable-menu {
                padding: 0 0 0 0;
                margin: 0 0 0 0;
            }

            .draggable-menu li ul {
                margin-top: 6px;
            }

            .draggable-menu li div {
                padding: 5px;
                border: 1px solid #cccccc;
                background: #eeeeee;
                cursor: move;
            }

            .draggable-menu li .is-dashboard {
                background: #fff6e0;
            }

            .draggable-menu li .icon-is-dashboard {
                color: #ffb600;
            }

            .draggable-menu li {
                list-style-type: none;
                margin-bottom: 4px;
                min-height: 35px;
            }

            .draggable-menu li.placeholder {
                position: relative;
                border: 1px dashed #b7042c;
                background: #ffffff;
                /** More li styles **/
            }

            .draggable-menu li.placeholder:before {
                position: absolute;
                /** Define arrowhead **/
            }
        </style>
    @endpush

    <div class='row'>
        <div class="col-sm-5">

            <div class="panel panel-success">
                <div class="panel-heading">
                    <strong>Menu Order (Active)</strong> <span id='menu-saved-info' style="display:none" class='pull-right text-success'><i
                                class='fa fa-check'></i> Menu Saved !</span>
                </div>
                <div class="panel-body clearfix">
                    <ul class='draggable-menu draggable-menu-active'>
                        
                      
                            <li data-id=menu data-name='{{$menu->name}}'>
                                <div class='{{$menu->is_dashboard?"is-dashboard":""}}' title="{{$menu->is_dashboard?'This is setted as Dashboard':''}}">
                                    <i class='{{($menu->is_dashboard)?"icon-is-dashboard fa fa-dashboard":$menu->icon}}'></i> {{$menu->name}} <span
                                            class='pull-right'><a class='fa fa-pencil' title='Edit'
                                                                  href='{{route("MenusControllerGetEdit",["id"=>$menu->id])}}?return_url={{urlencode(Request::fullUrl())}}'></a>&nbsp;&nbsp;<a
                                                title='Delete' class='fa fa-trash'
                                                onclick='{{CRUDBooster::deleteConfirm(route("MenusControllerGetDelete",["id"=>$menu->id]))}}'
                                                href='javascript:void(0)'></a></span>
                                    <br/><em class="text-muted">
                                        <small><i class="fa fa-users"></i> &nbsp; </small>
                                    </em>
                                </div>
                                <ul>
                               
                                            <li data-id='{{$child->id}}' data-name='{{$child->name}}'>
                                                <div class='{{$child->is_dashboard?"is-dashboard":""}}'
                                                     title="{{$child->is_dashboard?'This is setted as Dashboard':''}}"><i
                                                            class='{{($child->is_dashboard)?"icon-is-dashboard fa fa-dashboard":$child->icon}}'></i> {{$child->name}}
                                                    <span class='pull-right'><a class='fa fa-pencil' title='Edit'
                                                                                href='{{route("MenusControllerGetEdit",["id"=>$child->id])}}?return_url={{urlencode(Request::fullUrl())}}'></a>&nbsp;&nbsp;<a
                                                                title="Delete" class='fa fa-trash'
                                                                onclick='{{CRUDBooster::deleteConfirm(route("MenusControllerGetDelete",["id"=>$child->id]))}}'
                                                                href='javascript:void(0)'></a></span>
                                                    <br/><em class="text-muted">
                                                        <small><i class="fa fa-users"></i> &nbsp; </small>
                                                    </em>
                                                </div>
                                            </li>
                                    
                                </ul>
                            </li>
                    
                    </ul>
                    
                        <div align="center">Active menu is empty, please add new menu</div>
                    
                </div>
            </div>

            <div class="panel panel-danger">
                <div class="panel-heading">
                    <strong>Menu Order (Inactive)</strong>
                </div>
                <div class="panel-body clearfix">
                    <ul class='draggable-menu draggable-menu-inactive'>
     
                            <li data-id='{{$menu->id}}' data-name='{{$menu->name}}'>
                                <div><i class='{{$menu->icon}}'></i> {{$menu->name}} <span class='pull-right'><a class='fa fa-pencil' title='Edit'
                                                                                                                 href='{{route("MenusControllerGetEdit",["id"=>$menu->id])}}?return_url={{urlencode(Request::fullUrl())}}'></a>&nbsp;&nbsp;<a
                                                title='Delete' class='fa fa-trash'
                                                onclick='{{CRUDBooster::deleteConfirm(route("MenusControllerGetDelete",["id"=>$menu->id]))}}'
                                                href='javascript:void(0)'></a></span></div>
                                <ul>
                                    @if($menu->children)
                                    
                                            <li data-id='{{$child->id}}' data-name='{{$child->name}}'>
                                                <div><i class='{{$child->icon}}'></i> {{$child->name}} <span class='pull-right'><a class='fa fa-pencil'
                                                                                                                                   title='Edit'
                                                                                                                                   href='{{route("MenusControllerGetEdit",["id"=>$child->id])}}?return_url={{urlencode(Request::fullUrl())}}'></a>&nbsp;&nbsp;<a
                                                                title="Delete" class='fa fa-trash'
                                                                onclick='{{CRUDBooster::deleteConfirm(route("MenusControllerGetDelete",["id"=>$child->id]))}}'
                                                                href='javascript:void(0)'></a></span></div>
                                            </li>
                                       
                                    @endif
                                </ul>
                            </li>
                       
                    </ul>
                    
                        <div align="center" id='inactive_text' class='text-muted'>Inactive menu is empty</div>
                    
                </div>
            </div>


        </div>
        <div class="col-sm-7">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Add Menu
                </div>
                <div class="panel-body">
                    <form class='form-horizontal' method='post' id="form" enctype="multipart/form-data" action='{{CRUDBooster::mainpath("add-save")}}'>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type='hidden' name='return_url' value='{{Request::fullUrl()}}'/>
                        @include("crudbooster::default.form_body")
                        <p align="right"><input type='submit' class='btn btn-primary' value='Add Menu'/></p>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection