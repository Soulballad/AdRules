<?php
//white_domain_list
//白名单机制...，白名单是
//@date 2022年4月29日
//value=-1,代表失效本条规则，暂只支持单域名（针对引入外部白名单时的精确控制）,当处于strict_mode时，排除此key，单条关闭strict_mode
//value=0,代表仅加白单条域名
//value=1,代表其下级域名全部加白（例如3级域名，则其4级子域名全部加白）
//value=2,代表仅加白主域名及其子域名，即如果是主域名，加白全部，如果是子域名，加白命中的单条

return array(
    /**start**/
    'news-events.apple.com' => 0, //apple new 
    'dbankcdn.com' => 2, //华为APP商店图片
    'app.zhuanzhuan.com' => 0, //apo
    'lnk0.com' => 0, //福特派
    'share.dmhy.org' => 0, //动漫花园BT站
    'nstool.netease.com' => 0, //網易DNS檢測
    't.uc.cn' => 0, //夸克瀏覽器掃碼登陸
    '360.cn' => 0,
    'shop.wot.360.cn' => 0,
    'wot.360.cn' => 0,
    'pay.wg.360.cn' => 0,
    'vod.wg.360.cn' => 0,
    'wg.360.cn' => 0,
    'login.360.cn' => 0,
    'app.market.xiaomi.com' => 0,
    'www.paypalobjects.com' => 0,
    'a-msedge.net' => 0,
    'feedback.miui.com' => 0,
    'v2.get.sogou.com' => 0,
    'wan.yxskill.com' => 0,
    'static.tieba.baidu.com' => 0,
    'maccms.com' => 0,
    'app.qq.com' => 1,
    'qq-web.cdn-go.cn' => 0,
    'wx.qlogo.cn' => 0,
    'ilce.alicdn.com' => 0,
    'map.qq.com' => 0,
    'thirdwx.qlogo.cn' => 0,
    'p.qlogo.cn' => 0,
    'idqqimg.com' => 0,
    'aod.itunes.apple.com' => 0,
    'aod.itunes.g.aaplimg.com' => 0,
    'dash.cloudflare.com' => 0,
    'inews.gtimg.com' => 0,
    'wallpaper.cdn.pandora.xiaomi.com' => 0,
    'package.wallpaper.cdn.pandora.xiaomi.com.lan' => 0,
    'w.pandora.xiaomi.com' => 0,
    'gw.m.163.com' => 0,
    'quark.sm.cn' => 0,
    'bkimg.cdn.bcebos.com' => 0,
    'imgstat.baidu.com' => 0,
    'mb.yidianzixun.com' => 0,
    'sug.browser.miui.com' => 0,
    'qun.qq.com' => 1,
    'drive.quark.cn' => 1,
    'uri6.com' => 0,
    'wl.jd.com' => 0,
    'woozooo.com' => 0,
    'static.yximgs.com' => 1,
    'doc.weixin.qq.com' => 0,
    'wx.tenpay.com' => 0,
    'quark.sm.cn' => 0,
    'pan.quark.cn' => 0,
    'bkimg.cdn.bcebos.com' => 0,
    'imgstat.baidu.com' => 0,
    'mb.yidianzixun.com' => 0,
    'sug.browser.miui.com' => 0,
    'qun.qq.com' => 0,
    'metrics1.data.hicloud.com' => 0,
    'yyfweb.postar.cn' => 0,
    'api.yjllq.com' => 0,
    'paste.in' => 0,
    'nebula.kuaishou.com' => 0,
    'midas.gtimg.cn' => 0,
    /**end**/
    /**notracking 提议加白的一批域名 start**/
    'scribol.com' => 0,
    'tracking.epicgames.com' => 0,
    'logrocket.com' => 0,
    'loggly.com' => 0,
    'om.cbsi.com' => 0,
    'ipinfo.io' => 0,
    'v.shopify.com' => 0,
    'adobedtm.com' => 0,
    'c.evidon.com' => 0,
    'ereg.wip3.adobe.com' => 0,
    'csi.gstatic.com' => 0,
    'g.msn.com' => 0,
    'sascdn.com' => 0,
    'duckdns.org' => 0,
    'prf.hn' => 0,
    'placehold.it' => 0,
    'digg.com' => 0,
    'feedburner.com' => 0,
    'rambler.ru' => 1,
    'jiathis.com' => 0,
    'rs6.net' => 0,
    'com.com' => 0,
    's0.2mdn.net' => 0,
    'pr0gramm.com' => 0,
    'consent.cmp.oath.com' => 0,
    's.youtube.com' => 0,
    'purch.com' => 0,
    'fpdownload.macromedia.com' => 0,
    'dynatrace.com' => 0,
    'auditude.com' => 0,
    'app.link' => 0,
    /**notracking 提议加白的一批域名 end**/
);
