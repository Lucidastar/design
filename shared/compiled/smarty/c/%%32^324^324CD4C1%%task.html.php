<?php /* Smarty version 2.6.18, created on 2017-06-15 15:30:15
         compiled from designer/task.html */ ?>
<!DOCTYPE html>
<head>
    <!-- translations -->
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['translationMafe']; ?>
"></script>

<?php if ($this->_tpl_vars['isDebugMode']): ?>
    <!-- files that are built into pmui.css-->
    <?php $_from = $this->_tpl_vars['pmuiCssCacheFile']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['file']):
?>
    <link rel="stylesheet" type="text/css" href="/lib-dev/pmUI/<?php echo $this->_tpl_vars['file']; ?>
" />
    <?php endforeach; endif; unset($_from); ?>
    <!-- files that are built into mafe.css-->
    <?php $_from = $this->_tpl_vars['mafeCssFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['file']):
?>
    <link rel="stylesheet" type="text/css" href="/lib-dev/mafe/<?php echo $this->_tpl_vars['file']; ?>
" />
    <?php endforeach; endif; unset($_from); ?>

    <link rel="stylesheet" type="text/css" href="/lib-dev/css/jquery.layout.css" />
     <link rel="stylesheet" type="text/css" href="/lib/css/bootstrap.min.css" />     
     <link rel="stylesheet" type="text/css" href="/lib/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/lib-dev/css/jquery-ui-1.10.3.custom.min.css" />
    <!--<link rel="stylesheet" type="text/css" href="/lib/css/jquery.dataTables.css">-->

    <script type="text/javascript">
        var prj_uid = "<?php echo $this->_tpl_vars['prj_uid']; ?>
";
        var task_uid = "<?php echo $this->_tpl_vars['task_uid']; ?>
";
        var consolidated = "<?php echo $this->_tpl_vars['consolidated']; ?>
";
        var enterprise = "<?php echo $this->_tpl_vars['enterprise']; ?>
";
        var prj_readonly = "<?php echo $this->_tpl_vars['prj_readonly']; ?>
";
        var credentials = "<?php echo $this->_tpl_vars['credentials']; ?>
";
        var distribution = "<?php echo $this->_tpl_vars['distribution']; ?>
";
        var SYS_SYS = "<?php echo $this->_tpl_vars['SYS_SYS']; ?>
";
        var SYS_LANG = "<?php echo $this->_tpl_vars['SYS_LANG']; ?>
";
        var SYS_SKIN = "<?php echo $this->_tpl_vars['SYS_SKIN']; ?>
";
        var HTTP_SERVER_HOSTNAME = "<?php echo $this->_tpl_vars['HTTP_SERVER_HOSTNAME']; ?>
";
    </script>
    <script type="text/javascript" src="/lib-dev/js/wz_jsgraphics.js"></script>
    <script type="text/javascript" src="/lib-dev/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/lib-dev/js/underscore-min.js"></script>
    <script type="text/javascript" src="/lib-dev/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script type="text/javascript" src="/lib-dev/js/jquery.layout.min.js"></script>
    <script type="text/javascript" src="/lib-dev/js/restclient.min.js"></script>
    <script type="text/javascript" src="/lib-dev/js/modernizr.js"></script>

    <!-- files that are built into pmui.js-->
    <?php $_from = $this->_tpl_vars['pmuiJsCacheFile']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['file']):
?>
    <script type="text/javascript" src="/lib-dev/pmUI/<?php echo $this->_tpl_vars['file']; ?>
"></script>
    <?php endforeach; endif; unset($_from); ?>

    <!-- files that are built into mafe.js-->
    <?php $_from = $this->_tpl_vars['mafeJsFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['file']):
?>
    <script type="text/javascript" src="/lib-dev/mafe/<?php echo $this->_tpl_vars['file']; ?>
"></script>
    <?php endforeach; endif; unset($_from); ?>
    <!-- files that are built into designer.js-->
    <?php $_from = $this->_tpl_vars['designerCacheFile']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['file']):
?>
    <script type="text/javascript" src="/lib-dev/mafe/<?php echo $this->_tpl_vars['file']; ?>
"></script>
    <?php endforeach; endif; unset($_from); ?>

    <!-- tinyMCE -->
    <script type="text/javascript" src="/js/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>

    <!-- CodeMirror -->
    <script type="text/javascript" src="/js/codemirror/lib/codemirror.js"></script>
    <link rel="stylesheet" type="text/css" href="/js/codemirror/lib/codemirror.css"/>
    <script type="text/javascript" src="/js/codemirror/mode/javascript/javascript.js"></script>

    <script type="text/javascript" src="/js/codemirror/addon/edit/matchbrackets.js"></script>
    <script type="text/javascript" src="/js/codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <script type="text/javascript" src="/js/codemirror/mode/xml/xml.js"></script>
    <script type="text/javascript" src="/js/codemirror/mode/css/css.js"></script>
    <script type="text/javascript" src="/js/codemirror/mode/clike/clike.js"></script>
    <script type="text/javascript" src="/js/codemirror/mode/php/php.js"></script>

<?php else: ?>

    <link rel="stylesheet" type="text/css" href="/lib/css/mafe-<?php echo $this->_tpl_vars['buildhash']; ?>
.css" />
    <link rel="stylesheet" type="text/css" href="/lib/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/lib/css/zyupload/zyupload-1.0.0.css" />
     <link rel="stylesheet" type="text/css" href="/lib/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/css/<?php echo $this->_tpl_vars['sys_skin']; ?>
-pm3.css" />
    <script type="text/javascript">
        var prj_uid = "<?php echo $this->_tpl_vars['prj_uid']; ?>
";
        var app_uid = "<?php echo $this->_tpl_vars['app_uid']; ?>
";
        var consolidated = "<?php echo $this->_tpl_vars['consolidated']; ?>
";
        var enterprise = "<?php echo $this->_tpl_vars['enterprise']; ?>
";
        var prj_readonly = "<?php echo $this->_tpl_vars['prj_readonly']; ?>
";
        var credentials = "<?php echo $this->_tpl_vars['credentials']; ?>
";
        var distribution = "<?php echo $this->_tpl_vars['distribution']; ?>
";
        var SYS_SYS = "<?php echo $this->_tpl_vars['SYS_SYS']; ?>
";
        var SYS_LANG = "<?php echo $this->_tpl_vars['SYS_LANG']; ?>
";
        var SYS_SKIN = "<?php echo $this->_tpl_vars['SYS_SKIN']; ?>
";
        var HTTP_SERVER_HOSTNAME = "<?php echo $this->_tpl_vars['HTTP_SERVER_HOSTNAME']; ?>
";
    </script>
    <script type="text/javascript" src="/lib/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/lib/js/bootstrap-table.js"></script>
    <script type="text/javascript" src="/lib/js/bootstrap-table-zh-CN.js"></script>
    <script type="text/javascript" src="/lib/js/mafe-<?php echo $this->_tpl_vars['buildhash']; ?>
.task.js"></script>

<?php endif; ?>


</head>
<body onresize="resizingFrame();">
<!--<div class="ui-layout-north">-->
     <div class="loader"></div>
     <section class="navBar" id="idNavBar">
        <div class="head"></div>
        <nav>
            <ul id="idNavBarList">

            </ul>
        </nav>

    </section>
    <div class="bpmn_shapes">
    </div>
<!--</div>-->
<div id="p-center-layout"/>
    <!--BODY-->
    <div class="ui-layout-center tab-content" id="div-layout-canvas">
    </div>

    <section class="content" id="idContent">

        <div class="content_controls">
            <div class="head"></div>
            <ul id="contentControlList">
                
            </ul>
        </div>
        <div class="bpmn_shapes_legend">
            <div class="head"></div>
        </div>
        <div class="activity">
            <p>
                <a class="activity_btn"  onclick="activity_tab($(this).index())"   href="javascript:void(0)">基本信息</a>
                <a class="activity_btn" onclick="activity_tab($(this).index())"  href="javascript:void(0)">任务附件</a>
                <a class="activity_btn" onclick="activity_tab($(this).index())"    href="javascript:void(0)">结束条件</a>
            </p>
            <div  class="activity_main_box">
                <div class="basicInfo  m_bx"  style="display:block;">
                    <h5  class="basicInfo_h5">操作指引</h5>
                    <textarea  class="basicInfo_txt"   placeholder="输入你想说的话"></textarea>
                    <div><a  class="btn btn-info" href="javascript:void(0)">下一步</a></div>
                </div>
                <div class="file_box  m_bx">
                    <form  name="file_form  "   method="PUT"  id="file_form"    enctype="multipart/form-data" >
                        <p  class="file_a_bx">
                            <a  class="upload_active"  href="javascript:void(0)"  onclick="file_tab($(this).index())">上传资料</a>
                            <a  href="javascript:void(0)"  onclick="file_tab($(this).index())">从资料库中选择</a>
                            <a  href="javascript:void(0)"  onclick="file_tab($(this).index())">从课程中选择文件</a>
                        </p>
                        <div  class="ov_v">
                              <div  id="zyupload" class="diindex"  style="display:block;"></div>
                             <!--     <div class="fileBox">
                            <div class="fileInputP vm">
                                <div class="convent_choice">
                                    <div  class="andArea">
                                        <i class="filePicker">选择文件</i>
                                        <input type="file"  onchange="getFilesize(this)" name="tas_file[]" multiple id="fileInput" />
                                    </div>
                                </div>
                            </div>
                            <div  class="upload_drag_area">
                                 <span id="fileSpan" class="vm">或者将文件拖到此处</span>
                            <div class="mask"></div>
                            </div>
                           
                                 </div> -->

                            <table  class="fileList_parent  table" id="dd">
                                <thead>
                                    <tr>
                                        <th>书名</th>
                                        <th>类型</th>
                                        <th>大小</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                
                                <tbody class="fileList">
                                </tbody>
                                
                            </table>

                            <input type="submit" value="上传"   id="fileBtn" />
                        <div    class=" zlk  diindex" >
                            <div>
                                <form>
                                    <div  class="sel_ul">
                                        <label><input  type="radio" name="zlk" /><span>来自上传</span> </label>
                                        <label><input  type="radio" name="zlk" /><span>来自分享</span></label>
                                        <label><input  type="radio" name="zlk" /><span>公共资料</span></label>
                                    </div>
                                    <div class="upload_sech">
                                        <input  type="text"    name="z_sech" value=""  placeholder="请输入关键字"   />
                                        <a  href="javascript:void(0)">搜索</a>
                                    </div>
                                </form>
                                   <table id="upload_zlk" class=""  data-pagination="true"   ></table> 
                            </div>
                        </div> 
                        <div  class="kc  diindex">
                            <div>
                                <form>
                                    <div class="kc_bx">
                                        <input  type="text" class="form-control"   name="z_sech" value=""  placeholder="请输入关键字"   />
                                        <a  href="javascript:void(0)">搜索</a>
                                    </div>
                                </form>
                                   <table id="upload_kc" class=""  data-pagination="true"   ></table> 
                            </div>
                        </div> 
                        <div id="file_preview">
                            
                        </div>
                        <div>
                            <button></button>
                        </div>
                        </div>
                      
                    </form>
                </div>
                <div class="end_condition  m_bx">
                    <h5 class="end_condition_tit">选择结束条件</h5>
                    <form id="end_form">
                        <p><label><input  type="radio" name="js"  value="1"  />用户控制</label></p>
                        <p>提示：用户控制即，学生不需要任何的条件自身即可根据需要进行下一个任务</p>
                        <p>
                            <label><input  type="radio" name="js"  value="0"  />条件控制</label>
                        </p>
                       
                        <p>提示：条件控制即，学生需要回答指定的题目才能进行下一步操作</p>
                    </form>
                     <table id="end_condition_tab" class=""  data-pagination="true"   ></table> 
                     <div>
                          <a  class="btn btn-info" href="javascript:void(0)">下一步</a>
                     </div>
                </div>

            </div>
        </div>
    </section>

<SCRIPT src="/jscore/src/PM.js" type=text/javascript></SCRIPT>
<SCRIPT src="/jscore/src/Sessions.js" type=text/javascript></SCRIPT>
    <script type="text/javascript" src="/lib/js/mafe-<?php echo $this->_tpl_vars['buildhash']; ?>
.task.js"></script>
</body>
