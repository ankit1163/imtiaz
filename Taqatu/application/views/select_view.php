<html xmlns="http://www.w3.org/1999/xhtml">  
   <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
      <title>Untitled Document</title>  
   </head>  
   <table border="1">  
      <tbody>  
         <tr>  
            <td>Country Id</td>  
            <td>Country Name</td>  
         </tr>  
         <?php  
         foreach ($h->result() as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->project_name;?></td>  
            <td><?php //echo $row->country_name;?></td>  
            </tr>  
         <?php }  
         ?>  
      </tbody>  
   </table>  
<body>  
</body>  
</html>  