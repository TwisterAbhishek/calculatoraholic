UPDATE wp_options SET option_value = REPLACE(option_value, '{{$prev}}', '{{$new}}') WHERE option_name = 'home' OR option_name = 'siteurl';<br/>
UPDATE wp_posts SET post_content = REPLACE (post_content, '{{$prev}}', '{{$new}}');<br/>
UPDATE wp_posts SET post_excerpt = REPLACE (post_excerpt, '{{$prev}}', '{{$new}}');<br/>
UPDATE wp_postmeta SET meta_value = REPLACE (meta_value, '{{$prev}}','{{$new}}');<br/>
UPDATE wp_termmeta SET meta_value = REPLACE (meta_value, '{{$prev}}','{{$new}}');<br/>
UPDATE wp_comments SET comment_content = REPLACE (comment_content, '{{$prev}}', '{{$new}}');<br/>
UPDATE wp_comments SET comment_author_url = REPLACE (comment_author_url, '{{$prev}}','{{$new}}');<br/>
UPDATE wp_posts SET guid = REPLACE (guid, '{{$prev}}', '{{$new}}') WHERE post_type = 'attachment';