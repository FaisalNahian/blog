<?
$json = json_decode($website->blog_json);
if($json->blog_id)
	$blog_where[] = "blog.id IN (".implode(', ',$json->blog_id).")";
if($json->blog_tag)	
	$blog_where[] = "(blog_article_tag.name ILIKE '".implode("' OR blog_article_tag.name ILIKE '",$json->blog_tag)."')";

$clause['where'] = "( ".implode(' AND ',$blog_where)." )" ;

$website['blog_json'] = $website;

$p->css[] = '/pages/_blog.slug_/_blog.slug_.css';
die();
include('pages/_blog.slug_/_blog.slug_.php');