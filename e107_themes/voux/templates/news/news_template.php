<?php
/**
 * Copyright (C) e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * News templates - Bulgarian localized overlay for Voux.
 */

if (!defined('e107_INIT')) exit;

global $sc_style;

$NEWS_MENU_TEMPLATE['list']['start'] = '<div class="thumbnails">';
$NEWS_MENU_TEMPLATE['list']['end'] = '</div>';

$NEWS_TEMPLATE['list']['caption'] = '{NEWSCATEGORY}';
$NEWS_TEMPLATE['list']['start'] = '{SETIMAGE: w=400&h=350&crop=1}';
$NEWS_TEMPLATE['list']['end'] = '';
$NEWS_TEMPLATE['list']['item'] = '
		<div class="row row-fluid">
				<div class="span3 col-md-3">
                   <div class="thumbnail">
                        {NEWSTHUMBNAIL=placeholder}
                    </div>
				</div>
				<div class="span9 col-md-9">
                   <h3 class="media-heading">{NEWSTITLELINK}</h3>
                      <p>
                       	{NEWSSUMMARY}
					</p>
                    <p>
                       <a href="{NEWSURL}" class="btn btn-small btn-primary">'.LAN_READ_MORE.'</a>
                   </p>
 				</div>
		</div>
		<hr class="visible-xs" />
';

$NEWS_TEMPLATE['default']['item'] = '
		{SETIMAGE: w=850&h=1200}
		<article class="default-item">
		<div class="news-header">
			<span class="news-category">{NEWSCATEGORY}</span>
			<h2 class="news-title">{NEWSTITLELINK} </h2>
		 </div>
		 	<div class="news-carousel">{NEWSIMAGE: carousel=1&w=800&h=500&crop=1&}</div>
			<div class="news-description">
				{NEWSMETADIZ}
				{ADMINOPTIONS}
				<p><a class="more-link" href="{NEWSURL}">Продължете да четете <i class="fa fa-long-arrow-right"></i></a></p>
			</div>
           <div class="options">
        	<div class="col-md-4 text-left news-comments">{NEWSCOMMENTS}</div>
        	<div class="col-md-4">{SOCIALSHARE: class=soci} </div>
        	<div class="col-md-4 text-right news-date">{NEWSDATE=short} от {NEWSAUTHOR}</div>
        	</div>
		</article>
';

$NEWS_TEMPLATE['view']['item'] = '
		{SETIMAGE: w=850&h=1200}
		<article class="view-item">
		<div class="news-header">
			<span class="news-category">{NEWSCATEGORY}</span>
			<h2 class="news-title">{NEWSTITLELINK}</h2>
			<div class="news-date-full">{NEWSDATE=long}</div>
		 </div>
		 	{NEWSIMAGE: item=1}	{NEWSBODY=body}
				<div class="news-videos-1">
			{NEWSVIDEO: item=1}
		 	{NEWSVIDEO: item=2}
		 	{NEWSVIDEO: item=3}
			</div>
			<br />
			{SETIMAGE: w=400&h=400}
			<div class="row news-images-1">
        		<div class="col-md-6">{NEWSIMAGE: item=2}</div>
        		<div class="col-md-6">{NEWSIMAGE: item=3}</div>
        	</div>
        	<div class="row news-images-2">
        		<div class="col-md-6">{NEWSIMAGE: item=4}</div>
        		<div class="col-md-6">{NEWSIMAGE: item=5}</div>
            </div>
            {NEWSVIDEO: item=4}
			{NEWSVIDEO: item=5}
           <div class="body-extended">
				{NEWSBODY=extended}
			</div>
		</article>
		<hr />
		<div class="share-this-story">
			<h2 class="caption">СПОДЕЛЕТЕ ТАЗИ ПУБЛИКАЦИЯ</h2>
			<div>
			{SOCIALSHARE: type=facebook-share,twitter&class=soci}
			<small>{GLYPH=tags} ЕТИКЕТИ: &nbsp;{NEWSTAGS}</small>
			</div>
		</div>
		<hr />
		{NEWSRELATED: limit=3}
	<hr>
	{NEWSNAVLINK}
';

$NEWS_TEMPLATE['category']['body'] = '
	<div style="padding:5px"><div style="border-bottom:1px inset black; padding-bottom:1px;margin-bottom:5px">
	{NEWSCATICON}&nbsp;{NEWSCATEGORY}
	</div>
	{NEWSCAT_ITEM}
	</div>
';

$NEWS_TEMPLATE['category']['item'] = '
	<div style="width:100%;padding-bottom:2px">
	<table style="width:100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
	<td style="width:2px;vertical-align:top">&#8226;
	</td>
	<td style="text-align:left;vertical-align:top;padding-left:3px">
	{NEWSTITLELINK}
	<br />
	</td></tr>
	</table>
	</div>
';

$NEWS_TEMPLATE['related']['start'] = '{SETIMAGE: w=350&h=350&crop=1}<h2 class="caption">ОЩЕ ПОДОБНИ ПУБЛИКАЦИИ</h2><div class="row">';
$NEWS_TEMPLATE['related']['item'] = '<div class="col-md-4"><a href="{RELATED_URL}">{RELATED_IMAGE}</a><h3><a href="{RELATED_URL}">{RELATED_TITLE}</a></h3></div>';
$NEWS_TEMPLATE['related']['end'] = '</div>';
