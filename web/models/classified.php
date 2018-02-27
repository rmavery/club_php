<?php
class Classified
{
   function __construct()
   {
      // empty in our basic version
   }

   function add($vars)
   {
       if(!is_numeric($vars['category_id'])) exit;

       $vars['title']=mysql_real_escape_string($vars['title']);
       $vars['content']=mysql_real_escape_string($vars['content']);
       $vars['contact_details']=mysql_real_escape_string($vars['contact_details']);

       $q="INSERT INTO classifieds (category_id,title,content,contact_details,date)
       VALUES ('$vars[category_id]',\"$vars[title]\",\"$vars[content]\",
       \"$vars[contact_details]\",CURDATE())";
       mysql_query($q);

       $id=mysql_insert_id();
       return $id;
   }

   // list classifieds in a category
   function list($category_id)
   {
       if(!is_numeric($category_id)) exit;

       $q="SELECT * FROM classifieds WHERE category_id='$category_id'
       ORDER BY id DESC";
       $result=mysql_query($q);

       $ads=array();
       while($ad=mysql_fetch_array($result)) $ads[]=$ad;
       return $ads;
   }
}
?>