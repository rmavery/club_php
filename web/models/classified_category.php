<?php
class Category{
   function __construct()
   {
      // for this tutorial there will be nothing inside this method
      // in the real app you could possibly add some initialization
   }

   function add($name)
   {
      $this->filter($name);
      $q="INSERT INTO categories (name) VALUES (\"$name\")";
      mysql_query($q) or die(mysql_error());
   }

   function edit($name, $id)
   {
      $this->filter($name);
      // add some basic security
      if(!is_numeric($id)) exit;

      $q="UPDATE categories SET name=\"$name\" WHERE id='$id'";
      mysql_query($q);
   }

   // category name allows only alphanumeric
   private function filter($name)
   {
      $name=preg_replace("/\W/","",$name);
      return $name;
   }

   function delete($id)
   {
       if(!is_numeric($id)) exit;

       $q="DELETE FROM categories WHERE id='$id'";
       mysql_query($q);
   }

   // method to list the categories for admin edit/delete
   function list()
   {
       $q="SELECT * FROM categories ORDER BY name";
       $result=mysql_query($q);

       $cats=array();

       while($cat=mysql_fetch_array($result)) $cats[]=$cat;
       return $cats;
   }

   // method to return categories along with number of ads in them
   function list_count()
   {
       $q="SELECT COUNT(tA.id) as classifieds, tC.name as name, tC.id as id
       FROM categories tC LEFT JOIN classifieds tA ON tA.category_id=tC.id
       ORDER BY tC.name";
       $result=mysql_query($q);
       $cats=array();

       while($cat=mysql_fetch_array($result)) $cats[]=$cat;
       return $cats;
   }

   // method to return full category data for a single category
   function select($id)
   {
      if(!is_numeric($id)) exit;

       $q="SELECT * FROM categories WHERE id='$id'";
       $category=mysql_fetch_array(mysql_query($q));
       return $category;
    }
}
?>