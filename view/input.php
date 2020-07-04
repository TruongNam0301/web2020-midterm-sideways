<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <header>
    <style type="text/css">
     
    </style>
    </header>
    <body>

    </body>
    <div class= 'container'>
        <div class= 'select'>
            <select id="cars">
                <option value="khoa" selected>Khoa</option>
                <option value="lop">Lớp</option>
                <option value="sinhvien">Sinh Viên</option>
                <option value="monhoc" >Môn học</option>
            </select>
        </div>
        <div class='table'>
                <table class= ''>
            <tr>
            <th><a href="mypage.php?sort=type">Type:</a></th>
            <th><a href="mypage.php?sort=desc">Description:</a></th>
            <th><a href="mypage.php?sort=recorded">Recorded Date:</a></th>
            <th><a href="mypage.php?sort=added">Added Date:</a></th>
            </tr>
            <tr>
                <th>TenKhoa</th>
                <th>namthanhlap</th>
            </tr>
            <tr id="1">
                <td><input  class="name1" type="text" value="Alfreds Futterkiste" disabled="disabled" type="text"/></td>
                <td><intput class="year1" type="text" value="Alfreds Futterkiste" disabled></input></td>
                <td><button class='update'>upadte</button></td>
              
            </tr>
            <tr>
                <td>Centro comercial Moctezuma</td>
                <td>Francisco Chang</td>
                
            </tr>
            <tr>
                <td>Ernst Handel</td>
                <td>Roland Mendel</td>
                
            </tr>
            <tr>
                <td>Island Trading</td>
                <td>Helen Bennett</td>
              
            </tr>
            <tr>
                <td>Laughing Bacchus Winecellars</td>
                <td>Yoshi Tannamuri</td>
                
            </tr>
            <tr>
                <td>Magazzini Alimentari Riuniti</td>
                <td>Giovanni Rovelli</td>
               
            </tr>
            </table>
        </div>
        <div class='addSV'>
            <form action="">
                <label for="khoa">TenKhoa:</label><br>
                <input type="text" id="khoa" name="khoa" value=""><br>
                <label for="lname">NamThanhLap:</label><br>
                <input type="text" id="lname" name="lname" value=""><br><br>
                <input type="submit" value="add">
                <input type="submit" value="update">
                <input type="submit" value="delete">
            </form> 
        </div>
    <div>
    <script>
    $(document).ready(function(){
        $(".update").click(function(){
            $(".name1").removeAttr('disabled');
            let val=$(".name1").removeAttr('disabled');
            console.log(val)
})
    })
       
    </script>


</html>