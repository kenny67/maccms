<?php if (!defined('THINK_PATH')) exit(); /*a:25:{s:33:"template/conch/html/vod\play.html";i:1589601795;s:71:"E:\soft\wampServer64\www\maccms\template\conch\html\public\include.html";i:1578235052;s:68:"E:\soft\wampServer64\www\maccms\template\conch\html\widget\seos.html";i:1578235052;s:70:"E:\soft\wampServer64\www\maccms\template\conch\html\widget\themes.html";i:1589426196;s:68:"E:\soft\wampServer64\www\maccms\template\conch\html\public\head.html";i:1589359524;s:77:"E:\soft\wampServer64\www\maccms\template\conch\html\widget\play_list_con.html";i:1578235052;s:73:"E:\soft\wampServer64\www\maccms\template\conch\html\ads\ads_playlist.html";i:1578235050;s:69:"E:\soft\wampServer64\www\maccms\template\conch\html\ads\ads_vodw.html";i:1578235050;s:73:"E:\soft\wampServer64\www\maccms\template\conch\html\widget\zbvod_box.html";i:1578235052;s:71:"E:\soft\wampServer64\www\maccms\template\conch\html\widget\vod_box.html";i:1589177269;s:71:"E:\soft\wampServer64\www\maccms\template\conch\html\module\vod_art.html";i:1578235052;s:77:"E:\soft\wampServer64\www\maccms\template\conch\html\widget\art_box_right.html";i:1578235052;s:69:"E:\soft\wampServer64\www\maccms\template\conch\html\ads\ads_vodr.html";i:1578235050;s:77:"E:\soft\wampServer64\www\maccms\template\conch\html\widget\rank_box_text.html";i:1578235052;s:72:"E:\soft\wampServer64\www\maccms\template\conch\html\module\vod_rank.html";i:1578235052;s:77:"E:\soft\wampServer64\www\maccms\template\conch\html\widget\rank_box_week.html";i:1589248231;s:72:"E:\soft\wampServer64\www\maccms\template\conch\html\widget\rank_top.html";i:1589351690;s:75:"E:\soft\wampServer64\www\maccms\template\conch\html\widget\rank_bottom.html";i:1589249782;s:78:"E:\soft\wampServer64\www\maccms\template\conch\html\widget\rank_box_month.html";i:1578235052;s:76:"E:\soft\wampServer64\www\maccms\template\conch\html\widget\rank_box_all.html";i:1578235052;s:68:"E:\soft\wampServer64\www\maccms\template\conch\html\public\foot.html";i:1589427274;s:72:"E:\soft\wampServer64\www\maccms\template\conch\html\widget\foot_nav.html";i:1589425031;s:69:"E:\soft\wampServer64\www\maccms\template\conch\html\widget\icon2.html";i:1578235052;s:68:"E:\soft\wampServer64\www\maccms\template\conch\html\widget\icon.html";i:1578235052;s:71:"E:\soft\wampServer64\www\maccms\template\conch\html\ads\ads_bottom.html";i:1578235050;}*/ ?>
<!DOCTYPE html>
<html>
<head>       
	<?php $version = parse_ini_file(substr($maccms['path_tpl'], strlen($maccms['path'])).'info.ini'); $version = stristr('127.0.0|192.168', substr($_SERVER['HTTP_HOST'], 0, 7)) == true ? time() : $version['version']; $file = 'template/conch/asset/admin/Conch.php'; $newfile = 'application/admin/controller/Conch.php'; if (file_exists($newfile)) {} else { copy($file,$newfile); } $file = 'template/conch/asset/admin/hltheme.php'; $newfile = 'application/extra/hltheme.php'; if (file_exists($newfile)) {} else { copy($file,$newfile); } $file = 'template/conch/asset/admin/theme.html'; $dir = 'application/admin/view/conch'; $newfile = 'application/admin/view/conch/theme.html'; if (file_exists($dir)) {} else { mkdir($dir, 0777); copy($file,$newfile); } $conch = file_exists('application/extra/hltheme.php') ? require('application/extra/hltheme.php') : require(substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/admin/hltheme.php'); if($maccms['aid']==1): ?><!-- 首页 -->
<title><?php echo mac_default($conch['theme']['seos']['index_name'],$maccms['site_name']); ?></title>
<meta name="keywords" content="<?php echo mac_default($conch['theme']['seos']['index_key'],$maccms['site_keywords']); ?>" />
<meta name="description" content="<?php echo mac_default($conch['theme']['seos']['index_des'],$maccms['site_description']); ?>" />
<?php elseif($maccms['aid']==4): ?><!-- 留言本 -->
<title>求片留言 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>" />
<meta name="description" content="<?php echo $maccms['site_description']; ?>" />
<?php elseif($maccms['aid']==11): ?><!--  视频分类页 -->
<title><?php echo mac_filter_html(mac_default($obj['type_title'],$obj['type_name'])); ?>-第<?php echo $param['page']; ?>页 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_filter_html(mac_default($obj['type_key'],$obj['type_name'])); ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo mac_default($obj['type_des'],$maccms['site_description']); ?>" />
<?php elseif($maccms['aid']==12): ?><!-- 视频分类筛选 -->
<title>最新<?php echo $obj['type_name']; ?>-推荐<?php echo $obj['type_name']; ?>-第<?php echo $param['page']; ?>页 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['type_key']; ?>" />
<meta name="description" content="<?php echo $obj['type_des']; ?>" />
<?php elseif($maccms['aid']==13): ?><!-- 视频搜索 -->
<title>搜索<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?>,免费在线视频网站,在线观看,电影,电视剧,综艺,最新电影,最新电视剧" />
<meta name="description" content="<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?>搜索结果,<?php echo $maccms['site_name']; ?>" />
<?php elseif($maccms['aid']==14): ?><!-- 视频详情 -->
<title><?php echo mac_default(mac_filter_html($obj['vod_name']),'404'); ?>_<?php echo mac_filter_html($obj['type']['type_name']); ?>_<?php echo mac_filter_html($obj['type_1']['type_name']); ?>_<?php echo mac_default($conch['theme']['seos']['detail_name'],'高清资源在线播放_高清资源下载'); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_filter_html($obj['vod_name']); ?>,<?php echo mac_filter_html($obj['type']['type_name']); ?>,<?php echo mac_filter_html($obj['type_1']['type_name']); ?>,<?php echo mac_default($conch['theme']['seos']['detail_key'],'高清资源,在线播放,迅雷下载,百度网盘'); ?>,<?php echo $obj['vod_actor']; ?>,<?php echo $obj['vod_director']; ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo $conch['theme']['seos']['detail_des']; ?><?php echo $obj['vod_name']; ?>剧情:<?php echo $obj['vod_blurb']; ?>" />
<?php elseif($maccms['aid']==15): ?><!-- 视频播放 -->
<title><?php echo mac_default(mac_filter_html($obj['vod_name']),'404'); ?><?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?><?php echo mac_default($conch['theme']['seos']['play_name'],'高清资源在线播放'); ?>_<?php echo mac_filter_html($obj['type']['type_name']); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_filter_html($obj['vod_name']); ?>,<?php echo mac_filter_html($obj['type']['type_name']); ?>,<?php echo mac_filter_html($obj['type_1']['type_name']); ?>,<?php echo mac_default($conch['theme']['seos']['play_key'],'高清资源,在线播放'); ?>,<?php echo $obj['vod_actor']; ?>,<?php echo $obj['vod_director']; ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo mac_default($conch['theme']['seos']['play_des'],'高清资源在线播放'); ?><?php echo $obj['vod_blurb']; ?>" />
<?php elseif($maccms['aid']==16): ?><!-- 视频下载 -->
<title><?php echo mac_default(mac_filter_html($obj['vod_name']),'404'); ?><?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?><?php echo mac_default($conch['theme']['seos']['down_name'],'迅雷下载_百度网盘_高清资源'); ?>_<?php echo mac_filter_html($obj['type']['type_name']); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_filter_html($obj['vod_name']); ?>,<?php echo mac_filter_html($obj['type']['type_name']); ?>,<?php echo mac_filter_html($obj['type_1']['type_name']); ?>,<?php echo mac_default($conch['theme']['seos']['down_key'],'迅雷下载,百度网盘,高清资源'); ?>,<?php echo $obj['vod_actor']; ?>,<?php echo $obj['vod_director']; ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo mac_default($conch['theme']['seos']['down_des'],'迅雷下载_百度网盘_高清资源'); ?><?php echo $obj['vod_blurb']; ?>" />
<?php elseif($maccms['aid']==21): ?><!-- 文章分类 -->
<title><?php echo mac_filter_html(mac_default($conch['theme']['seos']['arti_name'],$obj['type_title'])); ?>-第<?php echo $param['page']; ?>页 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_filter_html(mac_default($conch['theme']['seos']['arti_key'],$obj['type_key'])); ?> - <?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo mac_filter_html(mac_default($conch['theme']['seos']['arti_des'],$obj['type_des'])); ?> - <?php echo $maccms['site_name']; ?>" />
<?php elseif($maccms['aid']==24): ?><!-- 文章详情 -->
<title><?php echo mac_default(mac_filter_html($obj['art_name']),'404'); ?>_<?php echo mac_filter_html(mac_default($conch['theme']['seos']['artd_name'],$obj['type']['type_name'])); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_filter_html(mac_default($obj['art_tag'],$obj['type']['type_name'])); ?>,<?php echo mac_default($conch['theme']['seos']['artd_key'],'资讯,热点新闻,社会热点'); ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo mac_default($conch['theme']['seos']['artd_des'],'资讯,热点新闻,社会热点'); ?>,<?php echo $obj['art_blurb']; ?>,<?php echo $maccms['site_name']; ?>" />
<?php elseif($maccms['aid']==30): ?><!-- 专题首页 -->
<title><?php echo mac_default($conch['theme']['seos']['topic_name'],'专题首页 - 精品专题'); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_default($conch['theme']['seos']['topic_key'],'电影专题,电视剧专题,综艺专题,动漫专题,推荐专题,专题收录'); ?>" />
<meta name="description" content="<?php echo mac_default($conch['theme']['seos']['topic_des'],'本站提供最新最全精品专题数据'); ?>" />
<?php elseif($maccms['aid']==34): ?><!-- 专题详情 -->
<title><?php echo mac_default($obj['topic_title'],$obj['topic_name']); ?>_<?php echo mac_default($conch['theme']['seos']['topicd_name'],'专题详情'); ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_default($obj['topic_key'],$obj['topic_name']); ?>,<?php echo mac_default($conch['theme']['seos']['topicd_key'],'精品专题'); ?>,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo mac_default($conch['theme']['seos']['topicd_des'],'精品专题'); ?>,<?php echo mac_default($obj['topic_des'],$obj['topic_blurb']); ?>" />
<?php elseif($maccms['aid']==80): ?><!-- 明星首页 -->
<title><?php echo $maccms['seo']['actor']['name']; ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $maccms['seo']['actor']['key']; ?>" />
<meta name="description" content="<?php echo $maccms['seo']['actor']['des']; ?>" />
<?php elseif($maccms['aid']==82): ?><!-- 明星筛选 -->
<title>明星库-明星档案-高级搜索-第<?php echo $param['page']; ?>页 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="明星,娱乐明星,电影明星,电视剧明星,明星大全" />
<meta name="description" content="<?php echo $maccms['site_name']; ?>为您提供各国男女明星的详细资料、近况以及最新电影，电视剧在线观看。" />
<?php elseif($maccms['aid']==84): ?><!-- 明星详情 -->
<title><?php echo $obj['actor_name']; ?>个人资料_<?php echo $obj['actor_name']; ?>演过的电视剧_<?php echo $obj['actor_name']; ?>电影全集-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['actor_name']; ?>个人资料,<?php echo $obj['actor_name']; ?>演过的电视剧,<?php echo $obj['actor_name']; ?>电影全集,<?php echo $obj['actor_name']; ?>最新电影,<?php echo $obj['actor_name']; ?>最新电视剧">
<meta name="description" content="<?php echo $maccms['site_name']; ?>为你收集了<?php echo $obj['actor_name']; ?>个人资料包括了<?php echo $obj['actor_name']; ?>最新演过的电视剧,<?php echo $obj['actor_name']; ?>电影全集,以及<?php echo $obj['actor_name']; ?>图片剧照最近动态等信息希望你能喜欢。"> 
<?php elseif($maccms['aid']==90): ?><!-- 角色首页 -->
<title><?php echo $maccms['seo']['role']['name']; ?>-第<?php echo $param['page']; ?>页 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $maccms['seo']['role']['key']; ?>" />
<meta name="description" content="<?php echo $maccms['seo']['role']['des']; ?>" />
<?php elseif($maccms['aid']==94): ?><!-- 角色详情 -->
<title><?php echo $obj['data']['vod_name']; ?>的角色<?php echo $obj['role_name']; ?>扮演者是<?php echo $obj['role_actor']; ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['data']['vod_name']; ?>,<?php echo $obj['role_actor']; ?>饰<?php echo $obj['role_name']; ?>" />
<meta name="description" content="<?php echo $maccms['site_name']; ?>为你收集了<?php echo $obj['data']['vod_name']; ?>的参演角色，及<?php echo $obj['data']['vod_name']; ?>的角色<?php echo $obj['role_name']; ?>扮演者<?php echo $obj['role_actor']; ?>近期的电影作品，电视剧作品，综艺作品等动态信息。" />
<?php elseif($maccms['aid']==100): ?><!-- 剧情首页 -->
<title><?php echo $maccms['seo']['plot']['name']; ?>-第<?php echo $param['page']; ?>页 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $maccms['seo']['plot']['key']; ?>" />
<meta name="description" content="<?php echo $maccms['seo']['plot']['des']; ?>" />
<?php elseif($maccms['aid']==104): ?><!-- 剧情详情 -->
<title><?php echo $obj['vod_name']; ?>分集剧情 - <?php echo $obj['vod_plot_list'][$param['page']]['name']; ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['vod_name']; ?>,分集剧情" />
<meta name="description" content="<?php echo $obj['vod_name']; ?>分集剧情，<?php echo $obj['vod_plot_list'][$param['page']]['name']; ?>，<?php echo mac_filter_html(mac_substring($obj['vod_plot_list'][$param['page']]['detail'],55)); ?>" />
<?php endif; ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="apple-touch-icon-precomposed" sizes="180x180" href="<?php echo mac_url_img(mac_default($conch['theme']['logo']['webapp'],substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/img/ios_fav.png')); ?>">
<link rel="shortcut icon" href="<?php echo mac_url_img(mac_default($conch['theme']['logo']['icon'],substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/img/favicon.png')); ?>" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>asset/css/mxstyle.css?v=<?php echo $version; ?>">
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>asset/css/hlstyle.css?v=<?php echo $version; ?>">
<?php if($conch['theme']['color']['select']==green): ?>
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>asset/css/green.css?v=<?php echo $version; ?>" name="skin">
<?php elseif($conch['theme']['color']['select']==blue): ?>
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>asset/css/blue.css?v=<?php echo $version; ?>" name="skin">
<?php elseif($conch['theme']['color']['select']==pink): ?>
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>asset/css/pink.css?v=<?php echo $version; ?>" name="skin">
<?php elseif($conch['theme']['color']['select']==red): ?>
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>asset/css/red.css?v=<?php echo $version; ?>" name="skin">
<?php elseif($conch['theme']['color']['select']==gold): ?>
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>asset/css/gold.css?v=<?php echo $version; ?>" name="skin">
<?php else: ?><link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>asset/css/default.css?v=<?php echo $version; ?>" name="skin"><?php endif; if($conch['theme']['color']['ms']==black): ?>
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>asset/css/black.css?v=<?php echo $version; ?>" name="color">
<?php else: ?><link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>asset/css/white.css?v=<?php echo $version; ?>" name="color"><?php endif; ?>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>asset/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>asset/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>asset/js/hlhtml.js?v=<?php echo $version; ?>"></script>
<script>var maccms={"path":"/maccms","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
<?php if($conch['theme']['lazy']): ?>
<style type="text/css">.balist_thumb,.vodlist_thumb,.topiclist_thumb,.artlist_thumb,.artbanner_thumb,.art_relates .artlr_pic,.play_vlist_thumb,.zbo .play_vlist_thumb.zboad,.actor_pic,.ranklist_thumb{background-image:url("<?php echo mac_url_img($conch['theme']['lazy']); ?>");background-repeat: no-repeat;}</style>
<?php endif; if($conch['theme']['banner']['smbg']==0): ?>
<style type="text/css">.bgi_box{display: none!important;}</style>
<?php endif; if($conch['theme']['banner']['bgstyle']): ?>
<style type="text/css">.hot_banner{background: <?php echo $conch['theme']['banner']['bgstyle']; ?>;background-size: contain;background-position: center top;}</style><?php endif; ?>
<?php echo $conch['theme']['head']['text']; ?>
<script type="text/javascript">
$(function() {
    var cookie_style=$.cookie("mystyle");
    if(cookie_style==null){
        if(white==black){
            $("#black").addClass("hide");
            $("#white").removeClass("hide")
        }else{
            console.log(white);
            console.log(black);
            $("#white").addClass("hide");
            $("#black").removeClass("hide")
        }
    }else{
        $("[id='"+cookie_style+"'].mycolor").addClass("hide");
        $("[id!='"+cookie_style+"'].mycolor").removeClass("hide")
    }
    if(cookie_style){
        switchSkin(cookie_style)
    }
    if(cookie_style==null){

    }
    else{$("link[name='color']").attr("href","/template/conch/asset/css/"+cookie_style+".css?v=4.0")}
    var $li=$(".mycolor");
    $li.click(function(){
        switchSkin(this.id)
    });
    function switchSkin(skinName){
        $("#"+skinName).addClass("hide").siblings().removeClass("hide");
        $("link[name='color']").attr("href","/template/conch/asset/css/"+skinName+".css?v=4.0");
        $.cookie("mystyle",skinName,{path:'/',expires:10})
    }
    var cookie_themes=$.cookie("mythemes");
    console.log(cookie_themes)
    if(cookie_themes==null|cookie_themes === undefined){
        if(0==green){
            $("#themes li#green").addClass("cur")
        }else if(0==blue){
            $("#themes li#blue").addClass("cur")
        }else if(0==pink){
            $("#themes li#pink").addClass("cur")
        }else if(0==red){
            $("#themes li#red").addClass("cur")
        }else if(0==gold){
            $("#themes li#gold").addClass("cur")
        }else{
            $("#themes li#default").addClass("cur")
        }
    }else{
        $("#themes li[id='"+cookie_themes+"']").addClass("cur")
    }
    if(cookie_themes){
        switchSkin1(cookie_themes)
    }if(cookie_themes==null){}
    else{
        $("link[name='skin']").attr("href","/template/conch/asset/css/"+cookie_themes+".css?v=4.0")
    }
    var $li=$("#themes li");
    $li.click(function(){
        switchSkin1(this.id)
    });
    function switchSkin1(skinName){
        $("#"+skinName).addClass("cur").siblings().removeClass("cur");
        $("link[name='skin']").attr("href","/template/conch/asset/css/"+skinName+".css?v=4.0");
        $.cookie("mythemes",skinName,{path:'/',expires:10})
    }
	var changeindex=1;
    var clickindex=1;
    $(".v_change").click(function(index){
        var changeindex=$('.v_change').index(this);
        $(".cbox_list").each(function(index,element){
            var cboxindex=$(".cbox_list").index(this);
            if(cboxindex==changeindex){
                if(clickindex<3){
                    $(this).find(".cbox"+(clickindex)).addClass("hide").removeClass("show").addClass('hide');
                    $(this).find(".cbox"+(clickindex+1)).removeClass("hide").addClass('show');$(this).find(".cbox"+(clickindex+2)).removeClass("show").addClass('hide');clickindex++}else{$(this).find(".cbox"+clickindex).removeClass("show").addClass('hide');$(this).find(".cbox"+1).removeClass("hide").addClass('show');clickindex=1}}})});
	})
</script>
</head>
<body class="bstem">

	<div id="play_page" <?php if($obj['type_id_1']==$conch['theme']['type']['zb']): ?>class="zbo"<?php endif; ?>>
    <div class="hot_banner">
    <div id="topnav" class="head_box">
    <div class="header">
	<div class="head_a">
		<div class="head_logo">
			<a title="<?php echo $maccms['site_name']; ?>" class="logo logo_b" style="background-image: url(<?php echo mac_url_img(mac_default($conch['theme']['logo']['bpic'],substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/img/logo_black.png')); ?>);" href="<?php echo $maccms['path']; ?>"></a>
			<a title="<?php echo $maccms['site_name']; ?>" class="logo logo_w" style="background-image: url(<?php echo mac_url_img(mac_default($conch['theme']['logo']['wpic'],substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/img/logo_white.png')); ?>);" href="<?php echo $maccms['path']; ?>"></a>
		</div>
		<div class="head_menu_a hidden_xs hidden_mi">
	        <ul class="top_nav clearfix">
	        	<li <?php if($maccms['aid'] == 1): ?>class="active"<?php endif; ?>><a href="<?php echo $maccms['path']; ?>" title="首页">首页</a></li>
		        <?php $__TAG__ = '{"num":"7","order":"asc","by":"sort","ids":"'.$conch['theme']['nav']['id'].'","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <li <?php if(($vo['type_id'] == $GLOBALS['type_id'] || $vo['type_id'] == $GLOBALS['type_pid'])): ?>class="active "<?php endif; ?>><a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; if($conch['theme']['nav']['zdybtn'] == 1): if($conch['theme']['nav']['zdybtn1'] == 1): ?>
				<li><a href="<?php echo $conch['theme']['nav']['zdylink1']; ?>" title="<?php echo $conch['theme']['nav']['zdyname1']; ?>" target="_blank"><?php echo $conch['theme']['nav']['zdyname1']; ?></a></li>
				<?php endif; if($conch['theme']['nav']['zdybtn2'] == 1): ?>
				<li><a href="<?php echo $conch['theme']['nav']['zdylink2']; ?>" title="<?php echo $conch['theme']['nav']['zdyname2']; ?>" target="_blank"><?php echo $conch['theme']['nav']['zdyname2']; ?></a></li>
				<?php endif; if($conch['theme']['nav']['zdybtn3'] == 1): ?>
				<li><a href="<?php echo $conch['theme']['nav']['zdylink3']; ?>" title="<?php echo $conch['theme']['nav']['zdyname3']; ?>" target="_blank"><?php echo $conch['theme']['nav']['zdyname3']; ?></a></li>
				<?php endif; if($conch['theme']['nav']['zdybtn4'] == 1): ?>
				<li><a href="<?php echo $conch['theme']['nav']['zdylink4']; ?>" title="<?php echo $conch['theme']['nav']['zdyname4']; ?>" target="_blank"><?php echo $conch['theme']['nav']['zdyname4']; ?></a></li>
				<?php endif; endif; ?>
            </ul>
        </div>
        <div class="head_search ">
            <form id="search" name="search" method="get" action="<?php echo mac_url('vod/search'); ?>" onsubmit="return qrsearch();"> 
                <input id="txt" type="text" name="wd" class="mac_wd form_control" value="<?php echo $param['wd']; ?>" placeholder="今日已更新<?php echo mac_data_count(0,'today','vod'); ?>部视频">
                <button class="submit" id="searchbutton" type="submit" name="submit"><i class="iconfont">&#xe633;</i></button>
                <a href="javascript:;" class="search_close visible-xs"><i class="iconfont">&#xe616;</i></a>
            </form>
        </div>
		<div class="head_user">
		    <ul>
                <?php if(strpos($conch['theme']['rtnav']['ym'],'a') !==false): ?>
                <li class="top_ico visible-xs">
                    <a href="javascript:;" class="open-search" title="搜索"><i class="iconfont">&#xe633;</i></a>
                </li>
                <li class="top_ico"> 
                    <a href="javascript:;" class="history" title="观看历史"><i class="iconfont">&#xe624;</i></a>
                </li>
                <?php endif; if($conch['theme']['topic']['btn'] == 1): if(strpos($conch['theme']['rtnav']['ym'],'b') !==false): ?>
                <li class="top_ico">
                    <a href="<?php echo mac_url_topic_index(); ?>" title="<?php echo mac_default($conch['theme']['topic']['title'],'专题'); ?>"><i class="iconfont">&#xe64c;</i></a>
                </li>
                <?php endif; endif; if($GLOBALS['config']['gbook']['status'] == 1): if(strpos($conch['theme']['rtnav']['ym'],'c') !==false): ?>
                <li class="top_ico">
                    <a href="<?php echo mac_url('gbook/index'); ?>" title="<?php echo mac_default($conch['theme']['gbook']['title'],'留言'); ?>"><i class="iconfont">&#xe632;</i></a>
                </li>
                <?php endif; endif; if($conch['theme']['map']['btn'] == 1): if(strpos($conch['theme']['rtnav']['ym'],'d') !==false): ?>
                <li class="top_ico">
                    <a href="<?php echo mac_url('map/index'); ?>" title="<?php echo mac_default($conch['theme']['map']['title'],'最新'); ?>"><i class="iconfont">&#xe652;</i></a>
                </li>
                <?php endif; endif; if($conch['theme']['rank']['btn'] == 1): if(strpos($conch['theme']['rtnav']['ym'],'e') !==false): ?>
                <li class="top_ico">
                    <a href="<?php echo mac_url('label/rank'); ?>" title="<?php echo mac_default($conch['theme']['rank']['title'],'排行榜'); ?>"><i class="iconfont">&#xe618;</i></a>
                </li>
                <?php endif; endif; if($conch['theme']['apps']['btn'] == 1): if(strpos($conch['theme']['rtnav']['ym'],'f') !==false): ?>
                <li class="top_ico">
                    <a href="<?php echo $conch['theme']['apps']['link']; ?>" title="下载APP" target="_blank"><i class="iconfont">&#xe653;</i></a>
                </li>
                <?php endif; endif; if($conch['theme']['qq']['btn'] == 1): if(strpos($conch['theme']['rtnav']['ym'],'g') !==false): ?>
                <li class="top_ico">
                    <a href="<?php echo $conch['theme']['qq']['link']; ?>" title="<?php echo mac_default($conch['theme']['qq']['title'],'QQ联系'); ?>" target="_blank"><i class="iconfont">&#xe66a;</i></a>
                </li>
                <?php endif; endif; if($conch['theme']['weixin']['btn'] == 1): if(strpos($conch['theme']['rtnav']['ym'],'h') !==false): ?>
                <li class="top_ico">
                    <a class="top_ico btn_wxgzh" href="javascript:void(0)" title="二维码"><i class="iconfont">&#xe614;</i></a>
                </li>
                <?php endif; endif; if($conch['theme']['rtnav']['zdybtn1'] == 1): ?>
				<li class="top_ico">
					<a href="<?php echo $conch['theme']['rtnav']['zdylink1']; ?>" title="<?php echo $conch['theme']['rtnav']['zdyname1']; ?>" target="_blank"><i class="iconfont">&#xe666;</i></a>
				</li>
				<?php endif; if($conch['theme']['rtnav']['zdybtn2'] == 1): ?>
				<li class="top_ico">
					<a href="<?php echo $conch['theme']['rtnav']['zdylink2']; ?>" title="<?php echo $conch['theme']['rtnav']['zdyname2']; ?>" target="_blank"><i class="iconfont">&#xe668;</i></a>
				</li>
				<?php endif; if($GLOBALS['config']['user']['status'] == 1): if(strpos($conch['theme']['rtnav']['ym'],'i') !==false): ?>
                <li class="top_ico">
					<a class="mac_user" href="javascript:;" title="<?php echo mac_default($conch['theme']['user']['title'],'会员'); ?>"><i class="iconfont">&#xe62b;</i></a>
                </li>
                <?php endif; endif; ?>
            </ul>
		</div>
	</div>
	</div>
</div>
<script>
    $(".open-search").click(function() {
        var Seacrh = $(".head_search");
        Seacrh.addClass("active").siblings().hide();
        Seacrh.find(".form_control").focus();
        $(".search_close").click(function() {
            Seacrh.removeClass("active").siblings().show();
        });
    });
</script>
    </div>
	<div class="play_boxbg">
		<div class="container">
			<div class="play_box play_video">
			<!-- 播放器  -->
				<div class="left_row fl">
					<div class="player_video embed-responsive embed-responsive-16by9 author-qq362695000 clearfix">
					<?php if($obj['vod_copyright'] == 1 && $GLOBALS['config']['app']['copyright_status'] == 1): ?>
					<div class="play_tips"><h3><?php echo mac_default($GLOBALS['config']['app']['copyright_notice'],'应版权方要求！本片相关资源已关闭！'); ?></h3></div>
		            <?php elseif($obj['vod_lock']): ?>
	                <div class="lock_tipe_box" style="background-image: url(<?php echo mac_url_img($obj['vod_pic']); ?>)"></div>
					<div class="play_tips lock_tips">
						<h3>因特殊原因，该视频暂时无法观看</h3>
						<p>给您带来不便非常抱歉</p>
					</div>
			        <?php else: if($obj['type_id_1']==$conch['theme']['type']['zb']): if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): if(empty($vo['urls']) || (($vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator ) && $vo['urls']->isEmpty())): ?>
							<div class="play_tips"><h3>抱歉，暂无信号源</h3></div>
							<?php endif; endforeach; endif; else: echo "" ;endif; endif; if($conch['theme']['play']['nbtn'] == 1): ?>           
			            <div id="fd_tips" class="fodong_box">
			            <div id="mq" class="fodong_tips">
			                <a class="close_tips" href="javascript:void(0)"><i class="iconfont">&#xe616;</i></a>
							<ul>
								<li>当前播放：<?php echo $obj['vod_name']; ?> - <?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?></li>
								<?php echo $conch['theme']['play']['notice']; ?>
							</ul>
						</div>
						</div>
			            <?php endif; ?>
				        <?php echo $player_data; ?><?php echo $player_js; endif; ?>							
					</div>
					<div class="play_but ">
					  <ul>
					    <li>
					     <a href="#bofy"><i class="iconfont">&#xe62a;</i>线路</a>
					     <?php if($GLOBALS['config']['gbook']['status'] == 1): ?>
						 <a href="javascript:void(0)" onclick="MAC.Gbook.Report('ID:<?php echo $obj['vod_id']; ?> -【名称：<?php echo $obj['vod_name']; ?> - <?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>】无法观看请检查修复')"><i class="iconfont">&#xe612;</i>报错</a>
                         <?php endif; ?>
                         <a href="javascript:;" onclick="location.reload()"><i class="iconfont">&#xe621;</i>刷新</a>   
                         <?php if($GLOBALS['config']['user']['status'] == 1): ?>
					     <a href="javascript:;" class="mac_ulog" data-type="2" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>"><i class="iconfont">&#xe629;</i>收藏</a>
					     <?php endif; if($obj['type_id_1']==$conch['theme']['type']['zb']): else: ?>
                         <a href="<?php echo $obj['player_info']['link_pre']; ?>" class="<?php if($param['nid']==1): ?>btns_disad<?php endif; ?>"><i class="iconfont pre-t">&#xe626;</i>上集</a>
                         <a href="<?php echo $obj['player_info']['link_next']; ?>" class="<?php if($param['nid']==$obj['vod_play_list'][$param['sid']]['url_count']): ?>btns_disad<?php endif; ?>">下集&nbsp;<i class="iconfont next-p next-t">&#xe62c;</i></a>
                         <?php endif; ?>
                        </li>
                       </ul>
					</div>
				</div>
				<div class="right_row fr hidden_xs hidden_mi" style="position: relative;">
					 <div class="play_box_right">
						 <div class="play_namebox">
						     <h3 class="title"><?php echo $obj['vod_name']; ?></h3>
				             <span class="fenlei"><?php echo $obj['type']['type_name']; ?></span>
						 </div>
						 <div class="play_infobox">
						     <div class="play_vlist cblock">
								 <div class="play_vlist_thumb vnow lazyload" data-original="<?php echo mac_url_img($obj['vod_pic']); ?>"></div>
								 <div class="play_vlist_text vnow">
									 <p class="play_vlist_title"><?php echo $obj['vod_name']; ?></p>
									 <p class="play_vlist_now"><?php if($obj['vod_copyright'] == 1 && $GLOBALS['config']['app']['copyright_status'] == 1): else: ?><a class="pull_right" href="#bofy"><i class="iconfont">&#xe62a;</i>&nbsp;切换线路</a><?php endif; ?><?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?></p>
								 </div>
							 </div>
                            <div class="play_clike">猜你喜欢</div>
                            <?php if($conch['theme']['ads']['btn']==1||$conch['theme']['ads']['btn']==2&&$user['group_id'] < 3): if($conch['theme']['ads']['play']['btn'] == 1): ?>
<div class="play_list_adbox">
     <div class="play_vlist cblock">
     <a target="_blank" rel="nofollow" href="<?php echo $conch['theme']['ads']['play']['link']; ?>" title="<?php echo $conch['theme']['ads']['play']['title']; ?>">
		<div class="play_vlist_thumb zboad lazyload" data-original="<?php echo mac_url_img($conch['theme']['ads']['play']['pic']); ?>"><?php if($conch['theme']['ads']['play']['tbtn'] == 1): ?>
             <span class="ad_tips">广告</span>
        <?php endif; ?>
        </div>
		<div class="play_vlist_text">
			<p class="play_vlist_title"><?php echo $conch['theme']['ads']['play']['title']; ?></p>
			<p class="play_vlist_now">随便看看</p>
		</div>
	</a>
</div>
</div>
<?php endif; endif; $__TAG__ = '{"num":"6","type":"current","paging":"false","order":"desc","by":"rnd","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if($vo['type_id_1']==$conch['theme']['type']['zb']): ?>
<div class="play_vlist cblock">
     <a href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"title="<?php echo $vo['vod_name']; ?>">
		<div class="play_vlist_thumb lazyload" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>"></div>
		<div class="play_vlist_text">
		    <div class="play_vlist_title">
			<p><?php echo $vo['vod_name']; ?></p>
			</div>
			<p class="play_vlist_now"><?php echo $vo['vod_area']; ?></p>
		</div>
	 </a>
</div>
<?php else: ?>
<div class="play_vlist cblock">
     <?php if(in_array(($vo['type_id']), is_array($conch['theme']['type']['hb'])?$conch['theme']['type']['hb']:explode(',',$conch['theme']['type']['hb']))): ?>
     <a href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"title="<?php echo $vo['vod_name']; ?>">
     <?php else: ?>
     <a <?php if($conch['theme']['playlink']['btn'] == 1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>">
     <?php endif; ?>
		<div class="play_vlist_thumb lazyload" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>"></div>
		<div class="play_vlist_text">
		    <div class="play_vlist_title">
			<p><?php echo $vo['vod_name']; ?></p>
			<p class="play_vlist_tag">类型：<?php echo $vo['vod_class']; ?>&nbsp;/&nbsp;年份：<?php echo $vo['vod_year']; ?></p>
			</div>
			<p class="play_vlist_now"><?php if($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?></p>
		</div>
	 </a>
</div>
<?php endif; endforeach; endif; else: echo "" ;endif; ?>
                         </div>
					 </div>
				</div>
				<!-- end 播放器  -->
            </div>
            <div class="play_box">
            	<div class="left_row fl">
					<div class="pannel play_pan clearfix">
						<div class="player">
							<div class="player_detail detail cblock">
							   <div class="video_title fl">
								  <h2 class="title margin_0"><?php echo $obj['vod_name']; ?></h2>
							   </div>
							   <div class="play_now">
								  <a class="flip" href="javascript:void(0)">简介&nbsp;<span class="xs1"><i class="iconfont">&#xe623;</i></span><span class="xs2" style="display:none;"><i class="iconfont">&#xe63a;</i></span></a>
							   </div>
							</div>
							<?php if($obj['type_id_1']==$conch['theme']['type']['zb']): else: ?>
							<div class="play_text">
							   <p class="nstem data ms_p margin_0">
									<?php if(($obj['vod_year'] != '') and ($obj['vod_year'] != 0)): ?><?php echo mac_url_create($obj['vod_year'],'year'); endif; if($obj['vod_area'] != ''): ?><?php echo mac_url_create($obj['vod_area'],'area'); endif; if($obj['vod_class'] != ''): ?><?php echo mac_url_create($obj['vod_class'],'class'); endif; ?>	
							   </p>
							<?php $count=1; ?>{maccms:foreach name="obj.vod_down_list"}
							</div><?php endif; ?>
							<div class="panel play_content" style="display:none;">
            			         <?php if($obj['type_id_1']==$conch['theme']['type']['zb']): else: ?>
	            			     <p>导演：<?php echo mac_default(mac_url_create($obj['vod_director'],'director'),'未知'); ?></p>
	            			     <p>主演：<?php echo mac_default(mac_url_create($obj['vod_actor'],'actor'),'未知'); ?></p>
	            			     <?php endif; ?>
		            			 <p><?php echo mac_default(mac_filter_html($obj['vod_content']),'暂无'); if($obj['vod_plot']): ?><a href="<?php echo mac_url_plot_detail($obj,['page'=>1]); ?>">[查看分集剧情]</a><?php endif; ?></p>
				    		</div>
						</div>																					
					</div>
                </div>	
             </div>
          </div>
       </div>
     <div class="container">
        <div class="left_row fl"> 
            <?php if($conch['theme']['ads']['btn']==1||$conch['theme']['ads']['btn']==2&&$user['group_id'] < 3): if($conch['theme']['ads']['vod_w']['btn'] == 1): ?>
    <div class="pannel ads_box clearfix">
		<div id="1001" class="ads ads_w">
			<?php echo $conch['theme']['ads']['vod_w']['content']; ?>
		</div>
	</div>
	<script type="text/javascript">var o = document.getElementById("1001");var h = o.offsetHeight; if (h > 0) {} else {$(".pannel.ads_box").addClass("hide");}</script>
<?php endif; endif; if($conch['theme']['actor']['btn'] == 1): if($obj['vod_actor'] != ''): $__TAG__ = '{"num":"1","order":"desc","name":"'.$obj[vod_actor].'","id":"vo1","key":"key"}';$__LIST__ = model("Actor")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key % 2 );++$key;if($vo1['actor_name'] != ''): ?>
					 <div id="actor_vbox" class="pannel clearfix">
						<div class="pannel_head clearfix">
							<h3 class="title">
								<?php echo $obj['vod_name']; ?>主要演职员
							</h3>						
						</div>
						<ul id="vod_actor" class="actor_vlist list_scroll clearfix">	
							<?php $__TAG__ = '{"num":"6","order":"desc","name":"'.$obj[vod_actor].'","id":"vo2","key":"key"}';$__LIST__ = model("Actor")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key % 2 );++$key;?>
							<li><a class="actor_part" title="<?php echo $vo2['actor_name']; ?>" href="<?php echo mac_url_actor_detail($vo2); ?>">
							<div class="actor_pic lazyload" data-original="<?php echo mac_url_img($vo2['actor_pic']); ?>"></div>
							<div class="actor_name"><?php echo $vo2['actor_name']; ?></div></a>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					 </div>		  
					 <?php endif; endforeach; endif; else: echo "" ;endif; endif; endif; if($obj['vod_copyright'] == 1 && $GLOBALS['config']['app']['copyright_status'] == 1): else: ?>
			<!-- 播放地址 -->
			<div class="pannel clearfix" id="bofy">
		    <?php if($obj['type_id_1']==$conch['theme']['type']['zb']): ?>
			    <div class="pannel_head clearfix">
					<h3 class="title">信号列表</h3>
				</div>
				<div class="tabs">
				    <div class="content ">
						 <ul class="content_playlist clearfix">
						    <?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key=>$vo2): ?>							
							<li <?php if($param['sid'] == $vo['sid'] && $param['nid'] == $vo2['nid']): ?>class="active"<?php endif; ?>><a href="<?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>$vo2['nid']]); ?>"><?php echo $vo2['name']; ?></a></li>
							<?php endforeach; endif; else: echo "" ;endif; if(empty($vo['urls']) || (($vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator ) && $vo['urls']->isEmpty())): ?>
							<li><a href="javascript:void(0)">暂无信号</a></li>
							<?php endif; endforeach; endif; else: echo "" ;endif; ?>
						 </ul> 
				    </div>
				</div>
             <?php else: ?>
			    <div class="pannel_head clearfix">
                    <div class="text_muted pull_right">
                    <a href="javascript:;" class="sort_btn"><i class="iconfont">&#xe658;</i>&nbsp;排序</a>
                    </div>
                    <div class="showbtn" style="display:none;">
						<span class="playlist_notfull text_muted pull_right">
						<a href="javascript:;" onclick="showlist(this);" class=""><i class="iconfont">&#xe63a;</i>&nbsp;展开全部剧集</a><span class="split_line"></span>
						</span>
						<span class="playlist_full text_muted pull_right" style="display:none;">
						<a href="javascript:;" onclick="hidelist(this);" class=""><i class="iconfont">&#xe628;</i>&nbsp;收起全部剧集</a><span class="split_line"></span>
						</span>
                    </div>
					<h3 class="title">播放列表</h3>
				</div>
				<div class="tabs playlist">
			      <div class="wrapper_fl xl" id="hl01">
					  <div class="scroller">
					  <ul class="title_nav">
						<?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>
						<li class="tab-play <?php if($vo['player_info']['from']==$obj['vod_play_list'][$param['sid']]['player_info']['from']): ?>conch-01<?php endif; ?>" title="<?php echo $vo['player_info']['show']; ?>"><a <?php if($vo['player_info']['from']==$obj['vod_play_list'][$param['sid']]['player_info']['from']): ?>href="javascript:;" class="playnow_info"<?php else: ?>href="<?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>$param['nid']]); ?>"<?php endif; ?>><i class="iconfont">&#xe62f;</i>&nbsp;<?php echo $vo['player_info']['show']; ?></a></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					  </ul>
					  </div>
				  </div>
				  
				  <?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>
                    <div class="content play_list_box <?php if($param['sid'] == $vo['sid']): ?>show<?php else: ?>hide<?php endif; ?>">
					  <div id="playlistbox" class="playlist_notfull">
						  <div class="wrapper_fl" id="hl02">
						  <div class="scroller">
							 <ul class="content_playlist list_scroll clearfix">
								<?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key=>$vo2): ?>								
								<li <?php if($param['sid'] == $vo['sid'] && $param['nid'] == $vo2['nid']): ?>class="active conch-02"<?php endif; ?>><a href="<?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>$vo2['nid']]); ?>"><?php echo $vo2['name']; ?></a></li>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							 </ul> 
						  </div>
						  </div>
						  <a href="javascript:;" onclick="showlist(this);" class="listshow hidden_xs"><span><i class="iconfont">&#xe63a;</i>&nbsp;展开全部</span></a>
					  </div>
					  <div class="playlist_full" style="display:none;">
						  <ul class="content_playlist clearfix">
							 <?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key2=>$vo2): ?>								
							 <li <?php if($param['sid'] == $vo['sid'] && $param['nid'] == $vo2['nid']): ?>class="active conch-02"<?php endif; ?>><a href="<?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>$vo2['nid']]); ?>"><?php echo $vo2['name']; ?></a></li>
							 <?php endforeach; endif; else: echo "" ;endif; ?>
						  </ul> 
					  </div>
				  </div>
				  <?php endforeach; endif; else: echo "" ;endif; ?>
				  <script type="text/javascript">$(".content.hide").remove();</script>
				</div><?php endif; ?>
			</div><?php endif; ?>
			<div class="pannel hidden_mb clearfix">
				<div class="pannel_head clearfix">
					<h3 class="title">
						猜你喜欢
					</h3>						
				</div>
		        <div class="play_vlist_box">
			    <?php if($conch['theme']['ads']['btn']==1||$conch['theme']['ads']['btn']==2&&$user['group_id'] < 3): if($conch['theme']['ads']['play']['btn'] == 1): ?>
<div class="play_list_adbox">
     <div class="play_vlist cblock">
     <a target="_blank" rel="nofollow" href="<?php echo $conch['theme']['ads']['play']['link']; ?>" title="<?php echo $conch['theme']['ads']['play']['title']; ?>">
		<div class="play_vlist_thumb zboad lazyload" data-original="<?php echo mac_url_img($conch['theme']['ads']['play']['pic']); ?>"><?php if($conch['theme']['ads']['play']['tbtn'] == 1): ?>
             <span class="ad_tips">广告</span>
        <?php endif; ?>
        </div>
		<div class="play_vlist_text">
			<p class="play_vlist_title"><?php echo $conch['theme']['ads']['play']['title']; ?></p>
			<p class="play_vlist_now">随便看看</p>
		</div>
	</a>
</div>
</div>
<?php endif; endif; $__TAG__ = '{"num":"6","type":"current","paging":"false","order":"desc","by":"rnd","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if($vo['type_id_1']==$conch['theme']['type']['zb']): ?>
<div class="play_vlist cblock">
     <a href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"title="<?php echo $vo['vod_name']; ?>">
		<div class="play_vlist_thumb lazyload" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>"></div>
		<div class="play_vlist_text">
		    <div class="play_vlist_title">
			<p><?php echo $vo['vod_name']; ?></p>
			</div>
			<p class="play_vlist_now"><?php echo $vo['vod_area']; ?></p>
		</div>
	 </a>
</div>
<?php else: ?>
<div class="play_vlist cblock">
     <?php if(in_array(($vo['type_id']), is_array($conch['theme']['type']['hb'])?$conch['theme']['type']['hb']:explode(',',$conch['theme']['type']['hb']))): ?>
     <a href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"title="<?php echo $vo['vod_name']; ?>">
     <?php else: ?>
     <a <?php if($conch['theme']['playlink']['btn'] == 1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>">
     <?php endif; ?>
		<div class="play_vlist_thumb lazyload" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>"></div>
		<div class="play_vlist_text">
		    <div class="play_vlist_title">
			<p><?php echo $vo['vod_name']; ?></p>
			<p class="play_vlist_tag">类型：<?php echo $vo['vod_class']; ?>&nbsp;/&nbsp;年份：<?php echo $vo['vod_year']; ?></p>
			</div>
			<p class="play_vlist_now"><?php if($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?></p>
		</div>
	 </a>
</div>
<?php endif; endforeach; endif; else: echo "" ;endif; ?>
			    </div>
			</div>
			<div class="pannel clearfix">
				<div class="pannel_head clearfix">
					<h3 class="title">
						相关推荐
					</h3>						
				</div>
				<?php if($obj['type_id_1']==$conch['theme']['type']['zb']): ?>
				<ul class="vodlist vodlist_sh list_scroll zbbox clearfix">
					<?php $__TAG__ = '{"num":"8","type":"current","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li class="zbvodlist_item num_<?php echo $key; ?>">
    <a class="zbvodlist_box" href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>" title="<?php echo $vo['vod_name']; ?>">
	<span class="zbvodlist_thumb lazyload" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>"></span>									
	<p class="zbvodlist_title"><?php echo $vo['vod_name']; ?></p>
	</a>
</li>

					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<?php else: if(in_array(($vo['type_id']), is_array($conch['theme']['type']['hb'])?$conch['theme']['type']['hb']:explode(',',$conch['theme']['type']['hb']))): ?>
				<ul class="vodlist vodlist_sh list_scroll hbbox clearfix">
					<?php $__TAG__ = '{"num":"8","type":"current","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if(in_array(($vo['type_id']), is_array($conch['theme']['type']['hb'])?$conch['theme']['type']['hb']:explode(',',$conch['theme']['type']['hb']))): ?>
<li class="vodlist_item num_<?php echo $key; ?>">
	<a class="vodlist_thumb lazyload" href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">						
		<span class="play hidden_xs"></span>
		<span class="pic_text text_right"><?php echo date('Y-m-d',$vo['vod_time']); ?></span>
	</a>
	<div class="vodlist_titbox">									
		<p class="vodlist_title">
		<a <?php if($conch['theme']['playlink']['btn'] == 1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>
		</p>
		<p class="vodlist_sub"><i class="iconfont playico">&#xe659;</i>&nbsp;<?php echo $vo['vod_hits']; ?>次点播</p>
	</div>
</li>
<?php else: ?>
<li class="vodlist_item num_<?php echo $key; ?>">
	<a class="vodlist_thumb lazyload" <?php if($conch['theme']['playlink']['btn'] == 1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">					
		<span class="play hidden_xs"></span>
		<?php if($maccms['aid'] == 1): ?>
		<span class="vodlist_top"><?php if(($vo['vod_year'] != '') and ($vo['vod_year'] != 0)): ?><em class="voddate voddate_year"><?php echo $vo['vod_year']; ?></em><?php endif; if($vo['vod_class'] != ''): ?><em class="voddate voddate_type"><?php echo mac_substring($vo['vod_class'],2); ?></em><?php endif; ?></span>
        <?php endif; if($vo['type_id_1']==1): if($vo['vod_score'] == 0): ?>
        <span class="pic_text text_right"><?php if($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?></span>
        <?php else: ?>
        <span class="pic_text text_right text_dy"><?php echo $vo['vod_remarks']; ?></span>
        <?php endif; else: ?>
		<span class="pic_text text_right"><?php if($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?></span>
		<?php endif; ?>
	</a>
	<div class="vodlist_titbox">									
		<p class="vodlist_title">
		<a <?php if($conch['theme']['playlink']['btn'] == 1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>
		</p>
		<p class="vodlist_sub"><?php echo mac_default(mac_filter_html(mac_url_create(mac_default($vo['vod_sub'],$vo['vod_actor']),'actor')),'未知'); ?></p>
	</div>
</li>
<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<?php else: ?>
				<ul class="vodlist vodlist_sm list_scroll clearfix">
					<?php $__TAG__ = '{"num":"12","type":"current","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if(in_array(($vo['type_id']), is_array($conch['theme']['type']['hb'])?$conch['theme']['type']['hb']:explode(',',$conch['theme']['type']['hb']))): ?>
<li class="vodlist_item num_<?php echo $key; ?>">
	<a class="vodlist_thumb lazyload" href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">						
		<span class="play hidden_xs"></span>
		<span class="pic_text text_right"><?php echo date('Y-m-d',$vo['vod_time']); ?></span>
	</a>
	<div class="vodlist_titbox">									
		<p class="vodlist_title">
		<a <?php if($conch['theme']['playlink']['btn'] == 1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>
		</p>
		<p class="vodlist_sub"><i class="iconfont playico">&#xe659;</i>&nbsp;<?php echo $vo['vod_hits']; ?>次点播</p>
	</div>
</li>
<?php else: ?>
<li class="vodlist_item num_<?php echo $key; ?>">
	<a class="vodlist_thumb lazyload" <?php if($conch['theme']['playlink']['btn'] == 1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">					
		<span class="play hidden_xs"></span>
		<?php if($maccms['aid'] == 1): ?>
		<span class="vodlist_top"><?php if(($vo['vod_year'] != '') and ($vo['vod_year'] != 0)): ?><em class="voddate voddate_year"><?php echo $vo['vod_year']; ?></em><?php endif; if($vo['vod_class'] != ''): ?><em class="voddate voddate_type"><?php echo mac_substring($vo['vod_class'],2); ?></em><?php endif; ?></span>
        <?php endif; if($vo['type_id_1']==1): if($vo['vod_score'] == 0): ?>
        <span class="pic_text text_right"><?php if($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?></span>
        <?php else: ?>
        <span class="pic_text text_right text_dy"><?php echo $vo['vod_remarks']; ?></span>
        <?php endif; else: ?>
		<span class="pic_text text_right"><?php if($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?></span>
		<?php endif; ?>
	</a>
	<div class="vodlist_titbox">									
		<p class="vodlist_title">
		<a <?php if($conch['theme']['playlink']['btn'] == 1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a>
		</p>
		<p class="vodlist_sub"><?php echo mac_default(mac_filter_html(mac_url_create(mac_default($vo['vod_sub'],$vo['vod_actor']),'actor')),'未知'); ?></p>
	</div>
</li>
<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<?php endif; endif; ?>
			</div>
            <?php $__TAG__ = '{"ids":"5","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<div class="pannel clearfix">
	<div class="pannel_head clearfix">
		<?php $__TAG__ = '{"order":"asc","by":"sort","mid":"2","ids":"5","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
		<a class="text_muted pull_right" href="<?php echo mac_url_type($vo); ?>">更多<i class="iconfont more_i">&#xe623;</i></a>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		<h3 class="title">推荐阅读</h3>						
	</div>
    <ul class="art_relates clearfix">
        <?php $__TAG__ = '{"num":"6","ids":"'.$obj['vod_rel_art'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if($vo['art_pic'] == ''): ?>
<li class="no_artpic">
   <a href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>">
   <div class="artlr_tit"><p class="artlr_b"><?php echo $vo['art_name']; ?></p><p class="artlr_name"><?php echo $vo['type']['type_name']; ?></p></div>
   </a>
</li>
<?php else: ?>
<li>
   <a href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>">
   <div class="artlr_tit"><p class="artlr_b"><?php echo $vo['art_name']; ?></p><p class="artlr_name"><?php echo $vo['type']['type_name']; ?></p></div>
   <div class="artlr_pic lazyload" data-original="<?php echo mac_url_img($vo['art_pic']); ?>"><span class="look hidden_xs"></span></div>
   </a>
</li>
<?php endif; endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
<?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="right_row pa_left fr hidden_xs hidden_mi">
            <?php if($conch['theme']['ads']['btn']==1||$conch['theme']['ads']['btn']==2&&$user['group_id'] < 3): if($conch['theme']['ads']['vod_r']['btn'] == 1): ?>
	<div class="pannel clearfix">
		<div id="1002" class="ads right_ads">
			<?php echo $conch['theme']['ads']['vod_r']['content']; ?>
		</div>
	</div>
<?php endif; endif; if($obj['type_id_1']==$conch['theme']['type']['zb']): ?>
            <div class="pannel clearfix">
				<div class="pannel_head author@qq3626-95-000 clearfix">
					<h3 class="title">热门电视台</h3>						
				</div>
				<ul class="ranklist_r clearfix">
					<?php $__TAG__ = '{"num":"10","type":"'.$conch['theme']['type']['zb'].'","order":"desc","by":"hits_week","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
	                    <li class="part_eone">
    <?php if($vo['type_id_1']==$conch['theme']['type']['zb']): ?>
    <a href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>">
    <?php else: if(in_array(($vo['type_id']), is_array($conch['theme']['type']['hb'])?$conch['theme']['type']['hb']:explode(',',$conch['theme']['type']['hb']))): ?>
    <a href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>">
    <?php else: ?>
    <a <?php if($conch['theme']['playlink']['btn'] == 1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?>>
    <?php endif; endif; ?>
    <span class="part_nums part_num<?php echo $key; ?>"><?php echo $key; ?></span><span class="info_right"><?php echo $vo['type']['type_name']; ?></span><?php echo $vo['vod_name']; ?></a>
</li>

					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
           <?php else: if($conch['theme']['rank']['vby'] == 'week'): ?>   
<div class="pannel clearfix">
    <div class="pannel_head clearfix">
        <?php if($conch['theme']['rank']['btn'] == 1): ?>
        <a class="text_muted pull_right" href="<?php echo mac_url('label/rank'); ?>">更多<i class="iconfont more_i">&#xe623;</i></a>
        <?php endif; ?>
        <h3 class="title"><?php echo $obj['type']['type_name']; ?>周<?php echo mac_default($conch['theme']['rank']['title'],'排行榜'); ?></h3>	
    </div>
    <ul class="vodlist clearfix">
        <?php $__TAG__ = '{"num":"1","type":"current","order":"desc","by":"hits_week","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<li class="ranklist_item">
    <?php if($vo['type_id_1']==$conch['theme']['type']['zb']): ?>
    <a title="<?php echo $vo['vod_name']; ?>" href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>">
    <?php else: if(in_array(($vo['type_id']), is_array($conch['theme']['type']['hb'])?$conch['theme']['type']['hb']:explode(',',$conch['theme']['type']['hb']))): ?>
    <a title="<?php echo $vo['vod_name']; ?>" href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>">
    <?php else: ?>
    <a title="<?php echo $vo['vod_name']; ?>" <?php if($conch['theme']['playlink']['btn'] == 1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?>>
    <?php endif; endif; ?>
	<div class="ranklist_img">
		 <div class="ranklist_thumb <?php if($vo['type_id_1']==$conch['theme']['type']['zb']): ?>zbpic<?php endif; ?> lazyload" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
			<span class="play hidden_xs"></span>
            <span class="part_nums part_num<?php echo $key; ?>"><?php echo $key; ?></span>
	     </div>
	</div>	
    <div class="ranklist_txt">
	     <div class="pannel_head clearfix">
              <h4 class="title"><?php echo $vo['vod_name']; ?></h4>	
         </div>
         <?php if($vo['type_id_1']==$conch['theme']['type']['zb']): ?>
            <p class="vodlist_sub">简介：<?php echo mac_default(mac_filter_html($vo['vod_content']),'暂无简介'); ?></p>
            <p><span class="vodlist_sub">类型：<?php echo $vo['vod_class']; ?></span></p>
         <?php else: ?>
            <p class="vodlist_sub margin-bottom-10"><?php echo mac_default($vo['vod_year'],'未知'); ?>&nbsp;/&nbsp;<?php echo mac_default($vo['vod_area'],'未知'); ?>&nbsp;/&nbsp;<?php echo mac_default($vo['vod_class'],'未知'); ?></p>
            <p><span class="vodlist_sub">主演：<?php echo mac_default($vo['vod_actor'],'未知'); ?></span></p>
	     <?php endif; ?>
    </div>
    </a>  		
</li>

		<?php endforeach; endif; else: echo "" ;endif; $__TAG__ = '{"num":"9","type":"'.$vo['type_id'].'","start":"2","order":"desc","by":"hits_week","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <li class="part_eone">
            <?php if(in_array(($vo['type_id']), is_array($conch['theme']['type']['hb'])?$conch['theme']['type']['hb']:explode(',',$conch['theme']['type']['hb']))): ?>
            <a href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>">
            <span class="part_nums part_num<?php echo $key+1; ?>"><?php echo $key+1; ?></span><span class="text_muted pull_right renqi"><i class="iconfont">&#xe631;</i>&nbsp;<?php echo $vo['vod_hits_week']; ?></span><?php echo $vo['vod_name']; ?></a>
            <?php else: ?>
            <a <?php if($conch['theme']['playlink']['btn'] == 1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>" <?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>" <?php endif; ?>>
            <span class="part_nums part_num<?php echo $key+1; ?>"><?php echo $key+1; ?></span><span class="text_muted pull_right renqi"><i class="iconfont">&#xe631;</i>&nbsp;<?php echo $vo['vod_hits_week']; ?></span><?php echo $vo['vod_name']; ?></a>
            <?php endif; ?>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div><?php endif; if($conch['theme']['rank']['vby'] == 'month'): ?> 
<div class="pannel clearfix">
    <div class="pannel_head clearfix">
        <?php if($conch['theme']['rank']['btn'] == 1): ?>
        <a class="text_muted pull_right" href="<?php echo mac_url('label/rank'); ?>">更多<i class="iconfont more_i">&#xe623;</i></a>
        <?php endif; ?>
        <h3 class="title"><?php echo $obj['type']['type_name']; ?>月<?php echo mac_default($conch['theme']['rank']['title'],'排行榜'); ?></h3>	
    </div>
    <ul class="vodlist clearfix">
        <?php $__TAG__ = '{"num":"1","type":"current","order":"desc","by":"hits_month","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<li class="ranklist_item">
    <?php if($vo['type_id_1']==$conch['theme']['type']['zb']): ?>
    <a title="<?php echo $vo['vod_name']; ?>" href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>">
    <?php else: if(in_array(($vo['type_id']), is_array($conch['theme']['type']['hb'])?$conch['theme']['type']['hb']:explode(',',$conch['theme']['type']['hb']))): ?>
    <a title="<?php echo $vo['vod_name']; ?>" href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>">
    <?php else: ?>
    <a title="<?php echo $vo['vod_name']; ?>" <?php if($conch['theme']['playlink']['btn'] == 1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?>>
    <?php endif; endif; ?>
	<div class="ranklist_img">
		 <div class="ranklist_thumb <?php if($vo['type_id_1']==$conch['theme']['type']['zb']): ?>zbpic<?php endif; ?> lazyload" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
			<span class="play hidden_xs"></span>
            <span class="part_nums part_num<?php echo $key; ?>"><?php echo $key; ?></span>
	     </div>
	</div>	
    <div class="ranklist_txt">
	     <div class="pannel_head clearfix">
<?php echo $vo['vod_hits_month']; ?>
              <h4 class="title"><?php echo $vo['vod_name']; ?></h4>	
         </div>
         <?php if($vo['type_id_1']==$conch['theme']['type']['zb']): ?>
            <p class="vodlist_sub">简介：<?php echo mac_default(mac_filter_html($vo['vod_content']),'暂无简介'); ?></p>
            <p><span class="vodlist_sub">类型：<?php echo $vo['vod_class']; ?></span></p>
         <?php else: ?>
            <p class="vodlist_sub margin-bottom-10"><?php echo mac_default($vo['vod_year'],'未知'); ?>&nbsp;/&nbsp;<?php echo mac_default($vo['vod_area'],'未知'); ?>&nbsp;/&nbsp;<?php echo mac_default($vo['vod_class'],'未知'); ?></p>
            <p><span class="vodlist_sub">主演：<?php echo mac_default($vo['vod_actor'],'未知'); ?></span></p>
	     <?php endif; ?>
    </div>
    </a>  		
</li>

		<?php endforeach; endif; else: echo "" ;endif; $__TAG__ = '{"num":"9","type":"'.$vo['type_id'].'","start":"2","order":"desc","by":"hits_month","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <li class="part_eone">
            <?php if(in_array(($vo['type_id']), is_array($conch['theme']['type']['hb'])?$conch['theme']['type']['hb']:explode(',',$conch['theme']['type']['hb']))): ?>
            <a href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>">
            <span class="part_nums part_num<?php echo $key+1; ?>"><?php echo $key+1; ?></span><span class="text_muted pull_right renqi"><i class="iconfont">&#xe631;</i>&nbsp;<?php echo $vo['vod_hits_month']; ?></span><?php echo $vo['vod_name']; ?></a>
            <?php else: ?>
            <a <?php if($conch['theme']['playlink']['btn'] == 1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>" <?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>" <?php endif; ?>>
            <span class="part_nums part_num<?php echo $key+1; ?>"><?php echo $key+1; ?></span><span class="text_muted pull_right renqi"><i class="iconfont">&#xe631;</i>&nbsp;<?php echo $vo['vod_hits_month']; ?></span><?php echo $vo['vod_name']; ?></a>
            <?php endif; ?>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div><?php endif; if($conch['theme']['rank']['vby'] == 'all'): ?> 
<div class="pannel clearfix">
    <div class="pannel_head clearfix">
        <?php if($conch['theme']['rank']['btn'] == 1): ?>
        <a class="text_muted pull_right" href="<?php echo mac_url('label/rank'); ?>">更多<i class="iconfont more_i">&#xe623;</i></a>
        <?php endif; ?>
        <h3 class="title"><?php echo $obj['type']['type_name']; ?><?php echo mac_default($conch['theme']['rank']['title'],'排行榜'); ?></h3>	
    </div>
    <ul class="vodlist clearfix">
        <?php $__TAG__ = '{"num":"1","type":"current","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<li class="ranklist_item">
    <?php if($vo['type_id_1']==$conch['theme']['type']['zb']): ?>
    <a title="<?php echo $vo['vod_name']; ?>" href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>">
    <?php else: if(in_array(($vo['type_id']), is_array($conch['theme']['type']['hb'])?$conch['theme']['type']['hb']:explode(',',$conch['theme']['type']['hb']))): ?>
    <a title="<?php echo $vo['vod_name']; ?>" href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>">
    <?php else: ?>
    <a title="<?php echo $vo['vod_name']; ?>" <?php if($conch['theme']['playlink']['btn'] == 1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?>>
    <?php endif; endif; ?>
	<div class="ranklist_img">
		 <div class="ranklist_thumb <?php if($vo['type_id_1']==$conch['theme']['type']['zb']): ?>zbpic<?php endif; ?> lazyload" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
			<span class="play hidden_xs"></span>
            <span class="part_nums part_num<?php echo $key; ?>"><?php echo $key; ?></span>
	     </div>
	</div>	
    <div class="ranklist_txt">
	     <div class="pannel_head clearfix">
<?php echo $vo['vod_hits']; ?>
              <h4 class="title"><?php echo $vo['vod_name']; ?></h4>	
         </div>
         <?php if($vo['type_id_1']==$conch['theme']['type']['zb']): ?>
            <p class="vodlist_sub">简介：<?php echo mac_default(mac_filter_html($vo['vod_content']),'暂无简介'); ?></p>
            <p><span class="vodlist_sub">类型：<?php echo $vo['vod_class']; ?></span></p>
         <?php else: ?>
            <p class="vodlist_sub margin-bottom-10"><?php echo mac_default($vo['vod_year'],'未知'); ?>&nbsp;/&nbsp;<?php echo mac_default($vo['vod_area'],'未知'); ?>&nbsp;/&nbsp;<?php echo mac_default($vo['vod_class'],'未知'); ?></p>
            <p><span class="vodlist_sub">主演：<?php echo mac_default($vo['vod_actor'],'未知'); ?></span></p>
	     <?php endif; ?>
    </div>
    </a>  		
</li>

		<?php endforeach; endif; else: echo "" ;endif; $__TAG__ = '{"num":"9","type":"'.$vo['type_id'].'","start":"2","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <li class="part_eone">
            <?php if(in_array(($vo['type_id']), is_array($conch['theme']['type']['hb'])?$conch['theme']['type']['hb']:explode(',',$conch['theme']['type']['hb']))): ?>
            <a href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>">
            <span class="part_nums part_num<?php echo $key+1; ?>"><?php echo $key+1; ?></span><span class="text_muted pull_right renqi"><i class="iconfont">&#xe631;</i>&nbsp;<?php echo $vo['vod_hits']; ?></span><?php echo $vo['vod_name']; ?></a>
            <?php else: ?>
            <a <?php if($conch['theme']['playlink']['btn'] == 1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>" <?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>" <?php endif; ?>>
            <span class="part_nums part_num<?php echo $key+1; ?>"><?php echo $key+1; ?></span><span class="text_muted pull_right renqi"><i class="iconfont">&#xe631;</i>&nbsp;<?php echo $vo['vod_hits']; ?></span><?php echo $vo['vod_name']; ?></a>
            <?php endif; ?>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div><?php endif; endif; ?>
        </div>
    </div>
    <?php if($conch['theme']['play']['nbtn'] == 1): ?>
	<script type="text/javascript">
		function autoScroll(obj){
			$(obj).find("ul").animate({
				marginTop : "-0.9rem"
			},500,function(){
				$(this).css({marginTop : "0px"}).find("li:first").appendTo(this);
			})
		}
		$(function(){
			setInterval('autoScroll(".fodong_tips")',3000);
		})
	</script>
  	<?php endif; ?>
   	<script>
    <?php if($obj['vod_jumpurl'] != ''): ?>
        location.href='<?php echo $obj['vod_jumpurl']; ?>';
    <?php endif; ?>
    </script>
    <script type="text/javascript">var w=$(window).width();if(w<820){$(".player_video.embed-responsive").css("padding-bottom","<?php echo mac_default($conch['theme']['play']['height'],'56.25'); ?>%");$(".MacPlayer").addClass("embed-responsive").css("padding-bottom","<?php echo mac_default($conch['theme']['play']['height'],'56.25'); ?>%");}else{$(".MacPlayer").addClass("embed-responsive").css("padding-bottom","56.25%");}</script>
    <!--统计数据-->
    <span class="mac_hits hits hide" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>" data-type="hits"></span>
    <span class="hl_history hide" data-name="<?php echo $obj['vod_name']; ?>" data-link="<?php echo mac_url_vod_play($obj,['sid'=>$param['sid'],'nid'=>$param['nid']]); ?>" data-pic="<?php echo mac_url_img($obj['vod_pic']); ?>" data-part="<?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>"></span>
    <span style="display: none" class="mac_hits hits" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?><?php echo $obj['art_id']; ?><?php echo $obj['topic_id']; ?>" "="" data-type="hits"></span>
	<span style="display: none" class="mac_hits hits_day" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?><?php echo $obj['art_id']; ?><?php echo $obj['topic_id']; ?>" "="" data-type="hits_day"></span>
	<span style="display: none" class="mac_hits hits_week" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?><?php echo $obj['art_id']; ?><?php echo $obj['topic_id']; ?>" "="" data-type="hits_week"></span>
	<span style="display: none" class="mac_hits hits_month" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?><?php echo $obj['art_id']; ?><?php echo $obj['topic_id']; ?>" "="" data-type="hits_month"></span>
    <span style="display:none" class="mac_ulog_set" data-type="4" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>" data-sid="<?php echo $param['sid']; ?>" data-nid="<?php echo $param['nid']; ?>"></span>
	<div class="foot <?php if($conch['theme']['fnav']['btn'] == 1): ?>foot_nav<?php endif; ?> clearfix">
<div class="container">
	<ul class="extra clearfix">
		<li id="backtop-ico">
			<a class="backtop" href="javascript:scroll(0,0)" title="返回顶部"><span class="top_ico"><i class="iconfont">&#xe628;</i></span></a>
		</li>
		<?php if($conch['theme']['qq']['btn'] == 1): ?>
    	<li>
			<a href="<?php echo $conch['theme']['qq']['link']; ?>" title="<?php echo mac_default($conch['theme']['qq']['title'],'QQ联系'); ?>" target="_blank"><span class="m_ico"><i class="iconfont">&#xe66a;</i></span></a>
	    </li>
	    <?php endif; if($conch['theme']['color']['mbtn'] == 1): ?>
		<li>
		<a id="black" class="mycolor <?php if($conch['theme']['color']['ms'] == 'black'): ?>hide<?php endif; ?>" href="javascript:void(0)" title="暗夜模式"><span class="m_ico theme_ico"><i class="iconfont">&#xe656;</i></span></a>
	    <a id="white" class="mycolor <?php if($conch['theme']['color']['ms'] == 'white'): ?>hide<?php endif; ?>" href="javascript:void(0)" title="白昼模式"><span class="m_ico theme_ico"><i class="iconfont">&#xe657;</i></span></a>
 	    </li>
 	    <?php endif; if($conch['theme']['color']['sbtn'] == 1): ?>
  	    <li>
			<a class="btn_theme" href="javascript:void(0)" title="主题颜色"><span class="m_ico"><i class="iconfont">&#xe665;</i></span></a>
    		<div class="sideslip">
				<div class="themecolor">
				  <p class="text_center"><i class="iconfont">&#xe665;</i>&nbsp;主题颜色</p>
					<ul id="themes"> 
						<li id="default" class="color_default">橘色</li>
						<li id="green" class="color_green">绿色</li>
						<li id="blue" class="color_blue">蓝色</li> 
						<li id="pink" class="color_pink">粉色</li>
						<li id="red" class="color_red">红色</li>
						<li id="gold" class="color_gold">金色</li>
					</ul>
				</div>
			</div>
	    </li>
	    <?php endif; ?>
	    <li class="hidden_xs">
			<a class="mobil_q" href="javascript:void(0)" title="手机访问"><span class="m_ico"><i class="iconfont">&#xe620;</i></span></a>
			<div class="sideslip">
				<div class="cans"></div>
				<div class="col_pd">
				  <p class="qrcode"></p>
				  <p class="text_center">扫码用手机访问</p>
				</div>
			</div>
	    </li>
	</ul>
	<div class="fo_t">
        <?php echo $conch['theme']['foot']['text']; ?>
        <p>&copy;&nbsp;<?php echo date('Y'); ?>&nbsp;<?php echo $maccms['site_url']; ?>&nbsp;&nbsp;E-Mail：<?php echo $maccms['site_email']; ?>&nbsp;&nbsp;<span <?php if($conch['theme']['tj']['btn'] == 0): ?>class="hide"<?php endif; ?>><?php echo $maccms['site_tj']; ?></span></p>
    </div>						
</div>
<?php if($conch['theme']['fnav']['btn'] == 1): ?>
<div class="foot_mnav hidden_mb">
	<ul class="foot_rows">
	    <?php if(strpos($conch['theme']['fnav']['ym'],'h') !==false): ?>
		<li class="foot_text">
			<a <?php if($maccms['aid'] == 1): ?>class="active" <?php endif; ?>href="<?php echo $maccms['path']; ?>">
				<?php if($maccms['aid'] == 1): ?><i class="iconfont">&#xe678;</i><?php else: ?><i class="iconfont">&#xe634;</i><?php endif; ?>
				<span class="foot_font">首页</span>
			</a>
		</li>
		<?php endif; $__TAG__ = '{"num":"5","order":"asc","by":"sort","ids":"'.$conch['theme']['fnav']['id'].'","id":"vo1","key":"key1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>
		<li class="foot_text">
			<a <?php if(($vo1['type_id'] == $GLOBALS['type_id'] || $vo1['type_id'] == $GLOBALS['type_pid'])): ?>class="active"<?php endif; ?> href="<?php echo mac_url_type($vo1); ?>">	
				<?php if(($vo1['type_id'] == $GLOBALS['type_id'] || $vo1['type_id'] == $GLOBALS['type_pid'])): if(stristr($vo1['type_name'],'纪录片')==true||stristr($vo1['parent']['type_name'],'纪录片')==true): ?><i class="iconfont">&#xe66f;</i><?php elseif(stristr($vo1['type_name'],'福利')==true||stristr($vo1['parent']['type_name'],'福利')==true): ?><i class="iconfont">&#xe677;</i><?php else: ?><i class="iconfont"><?php switch($vo1['type_id']): case "1": ?>&#xe671;<?php break; case "2": ?>&#xe672;<?php break; case "3": ?>&#xe676;<?php break; case "4": ?>&#xe66c;<?php break; case "5": ?>&#xe67d;<?php break; case $conch['theme']['type']['zb']: ?>&#xe66b;<?php break; default: ?>&#xe675;<?php endswitch; ?></i><?php endif; else: if(stristr($vo1['type_name'],'纪录片')==true||stristr($vo1['parent']['type_name'],'纪录片')==true): ?><i class="iconfont">&#xe651;</i><?php elseif(stristr($vo1['type_name'],'福利')==true||stristr($vo1['parent']['type_name'],'福利')==true): ?><i class="iconfont">&#xe655;</i><?php else: ?><i class="iconfont"><?php switch($vo1['type_id']): case "1": ?>&#xe64a;<?php break; case "2": ?>&#xe649;<?php break; case "3": ?>&#xe64b;<?php break; case "4": ?>&#xe648;<?php break; case "5": ?>&#xe630;<?php break; case $conch['theme']['type']['zb']: ?>&#xe650;<?php break; default: ?>&#xe647;<?php endswitch; ?></i><?php endif; endif; ?>
				<span class="foot_font"><?php echo $vo1['type_name']; ?></span>
			</a>
		</li>
		<?php endforeach; endif; else: echo "" ;endif; if($conch['theme']['fnav']['zdybtn1'] == 1): ?>
		<li class="foot_text">
			<a href="<?php echo $conch['theme']['fnav']['zdylink1']; ?>" target="_blank">		
				<i class="iconfont">&#xe666;</i>
				<span class="foot_font"><?php echo $conch['theme']['fnav']['zdyname1']; ?></span>
			</a>
		</li>
		<?php endif; if($conch['theme']['fnav']['zdybtn2'] == 1): ?>
		<li class="foot_text">
			<a href="<?php echo $conch['theme']['fnav']['zdylink2']; ?>" target="_blank">		
				<i class="iconfont">&#xe668;</i>
				<span class="foot_font"><?php echo $conch['theme']['fnav']['zdyname2']; ?></span>
			</a>
		</li>
		<?php endif; if($conch['theme']['topic']['btn'] == 1): if(strpos($conch['theme']['fnav']['ym'],'a') !==false): ?>
		<li class="foot_text">
			<a <?php if($maccms['mid'] == 3): ?>class="active" <?php endif; ?>href="<?php echo mac_url_topic_index(); ?>">		
				<?php if($maccms['mid'] == 3): ?><i class="iconfont">&#xe67c;</i><?php else: ?><i class="iconfont">&#xe64c;</i><?php endif; ?>
				<span class="foot_font"><?php echo mac_default($conch['theme']['topic']['title'],'专题'); ?></span>
			</a>
		</li>
		<?php endif; endif; if($GLOBALS['config']['gbook']['status'] == 1): if(strpos($conch['theme']['fnav']['ym'],'b') !==false): ?>
		<li class="foot_text">
			<a <?php if($maccms['aid'] == 4): ?>class="active" <?php endif; ?>href="<?php echo mac_url('gbook/index'); ?>">		
				<?php if($maccms['aid'] == 4): ?><i class="iconfont">&#xe66d;</i><?php else: ?><i class="iconfont">&#xe632;</i><?php endif; ?>
				<span class="foot_font"><?php echo mac_default($conch['theme']['gbook']['title'],'留言'); ?></span>
			</a>
		</li>
		<?php endif; endif; if($conch['theme']['map']['btn'] == 1): if(strpos($conch['theme']['fnav']['ym'],'c') !==false): ?>
		<li class="foot_text">
			<a <?php if($maccms['aid'] == 2): ?>class="active" <?php endif; ?>href="<?php echo mac_url('map/index'); ?>">		
				<?php if($maccms['aid'] == 2): ?><i class="iconfont">&#xe66e;</i><?php else: ?><i class="iconfont">&#xe652;</i><?php endif; ?>
				<span class="foot_font"><?php echo mac_default($conch['theme']['map']['title'],'最新'); ?></span>
			</a>
		</li>
		<?php endif; endif; if($conch['theme']['rank']['btn'] == 1): if(strpos($conch['theme']['fnav']['ym'],'d') !==false): ?>
		<li class="foot_text">
			<a <?php if($maccms['aid'] == 7): ?>class="active" <?php endif; ?>href="<?php echo mac_url('label/rank'); ?>">		
				<i class="iconfont">&#xe618;</i>
				<span class="foot_font"><?php echo mac_default($conch['theme']['rank']['title'],'排行榜'); ?></span>
			</a>
		</li>
		<?php endif; endif; if($conch['theme']['actor']['btn'] == 1): if(strpos($conch['theme']['fnav']['ym'],'e') !==false): ?>
		<li class="foot_text">
			<a <?php if($maccms['mid'] == 8): ?>class="active" <?php endif; ?>href="<?php echo mac_url('actor/index'); ?>">		
				<?php if($maccms['mid'] == 8): ?><i class="iconfont">&#xe670;</i><?php else: ?><i class="iconfont">&#xe629;</i><?php endif; ?>
				<span class="foot_font"><?php echo mac_default($conch['theme']['actor']['title'],'明星'); ?></span>
			</a>
		</li>
		<?php endif; endif; if($conch['theme']['role']['btn'] == 1): if(strpos($conch['theme']['fnav']['ym'],'f') !==false): ?>
		<li class="foot_text">
			<a <?php if($maccms['mid'] == 9): ?>class="active" <?php endif; ?>href="<?php echo mac_url('role/index'); ?>">		
				<?php if($maccms['mid'] == 9): ?><i class="iconfont">&#xe674;</i><?php else: ?><i class="iconfont">&#xe654;</i><?php endif; ?>
				<span class="foot_font"><?php echo mac_default($conch['theme']['role']['title'],'角色'); ?></span>
			</a>
		</li>
		<?php endif; endif; if($conch['theme']['plot']['btn'] == 1): if(strpos($conch['theme']['fnav']['ym'],'h') !==false): ?>
		<li class="foot_text">
			<a <?php if($maccms['mid'] == 10): ?>class="active" <?php endif; ?>href="<?php echo mac_url('plot/index'); ?>">		
				<?php if($maccms['mid'] == 10): ?><i class="iconfont">&#xe67d;</i><?php else: ?><i class="iconfont">&#xe630;</i><?php endif; ?>
				<span class="foot_font"><?php echo mac_default($conch['theme']['plot']['title'],'剧情'); ?></span>
			</a>
		</li>
		<?php endif; endif; ?>
	</ul>
</div>
<?php endif; if($conch['theme']['ads']['btn']==1||$conch['theme']['ads']['btn']==2&&$user['group_id'] < 3): if($conch['theme']['ads']['bottom']['btn'] == 1): ?>
<div id="bottom_ads" class="hl_bottom_ads">
<a class="close_ads_btn" href="javascript:void(0)"><i class="iconfont">&#xe616;</i></a>
<iframe width="100%" height="100%" id="adiframe" class="bottom_ads_box" src="<?php echo mac_url('label/ads_iframe'); ?>" frameborder="0" border="0" marginwidth="0" marginheight="0" scrolling="no" onLoad="iFrameHeight()"></iframe>
<script type="text/javascript">
	function iFrameHeight() {
	var ifm= document.getElementById("adiframe");
		var subWeb = document.frames ? document.frames["adiframe"].document : ifm.contentDocument;
		if(ifm != null && subWeb != null) {
			ifm.style.height = 'auto';
			ifm.style.height = subWeb.body.scrollHeight+'px';
		}
		var height = $("#adiframe").height();
		if (height > 0) {
			$(".foot").addClass("foot_stem");
		}
	};
</script>
</div>
<?php endif; endif; ?>
</div>
<div class="conch_history_pop <?php if($GLOBALS['config']['user']['status'] == 1): ?>user_log<?php endif; ?>">
	<div class="conch_history_bg">
		<div class="conch_history_title"><span>观看记录</span><a id="close_history" target="_self" href="javascript:void(0)"><i class="iconfont">&#xe616;</i></a></div>
		<div class="conch_history_box">
			<ul class="vodlist" id="conch_history"></ul>
		</div>
	</div>
</div>
<div style="display: none;" class="mac_timming" data-file="" ></div>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/jquery.stem.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>asset/js/hlexpand.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>asset/js/home.js"></script>
<?php if($conch['theme']['search']['lxbtn'] == 1): ?>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>asset/js/jquery.ac.js"></script>
<?php endif; if($conch['theme']['font'] == 1): ?>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>asset/js/strantext.js"></script><?php endif; ?>
	</div>
</body>
</html>