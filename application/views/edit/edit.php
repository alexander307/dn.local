<?php $id = Cookie::get('user', 'no user'); ?>
<div id = "edit">
    <h1>Здесь вы можете отредактировать личную информацию</h1>
    <ul >
            <li><a href= '/edit/edit1/<?php echo $id; ?>' class= 'iframe' title= 'Редактировать'>
                    <input type ="button" value = "Редактировать уникальную информацию" />
            </a></li><br/>
            <li><a href= '/edit/edit2/<?php echo $id; ?>' class= 'iframe' title= 'Редактировать'>
                    <input type ="button" value = "Редактировать главную информацию" />
            </a></li><br/>
            <li><a href= '/edit/edit3/<?php echo $id; ?>' class= 'iframe' title= 'Редактировать'>
                    <input type ="button" value = "Редактировать увлечения" />
            </a></li><br/>
            <li><a href= '/edit/edit4/<?php echo $id; ?>' class= 'iframe' title= 'Редактировать'>
                    <input type ="button" value = "Редактировать места пребывания" />
            </a></li><br/>
    </ul>
    
    <a href= '/user/<?php echo $id; ?>'>
        <input type ="button" value = "Назад" /> </a>
</div>
                
                



