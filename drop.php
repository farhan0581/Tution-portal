<meta charset="utf-8">
<script src="js/jquery-1.11.1.min.js"></script>
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <script src="js/bootstrap.min.js" type=""></script>
<form  method = "POST" action="sview1.php">
        <div class="col-md-12">
                                                <div class="jumbotron">
                                                <font color="black">
                                              Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="15" style="border:0" value="<?php if ( !empty($row['name']))  echo $row['name']; ?>"><br><br>
                                              Qualification:&nbsp;&nbsp;<input type="text" size="15" style="border:0" value="<?php if ( !empty($row['qualif']))  echo $row['qualif']; ?>"><br><br>
                                              Subjects:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="border:0" size="15" value="<?php if ( !empty($row['subjects']))  echo $row['subjects']; ?>">
                                              <textarea class="form-control" rows="2" cols="1"></textarea>
                                          </font><br><br>
                                            <!--p align="center"><a class="btn btn-primary" href="#" role="button">View</a></p-->
                                            <input type="hidden" name="vid" value="<?php echo $row['tuid'] ;?>"/>
                                            <input type="submit" class="btn btn-primary" value="view" name="view">
                                          </div></div>
                                          </form>