<?php
$id=$_GET['id'];
$t="";
if($id==1){
    $t="{'name':'Lions', 'city':'Tyre',
        'players':[
                   {'name':'Rami','age':22,'numero':10},
                   {'name':'Hadi','age':17,'numero':20}, 
                   {'name':'George','age':23,'numero':11},
                   {'name':'Haydar','age':21,'numero':12}

               ]
           }";

}
elseif($id==2){
$t="{'name':'Tigers', 'city':'Beirut',
     'players':[
                {'name':'ali','age':21,'numero':1},
                {'name':'jad','age':18,'numero':2}, 
                {'name':'samir','age':22,'numero':3}
            ]
        }";


}
elseif($id==3)
{

    $t="{'name':'Al-Itihad', 'city':'Nabatieh',
        'players':[
                   {'name':'Moussa','age':21,'numero':5},
                   {'name':'Michel','age':19,'numero':2}, 
                   {'name':'Walid','age':25,'numero':8},
                   {'name':'Ahmad','age':24,'numero':9},
                   {'name':'Toni','age':20,'numero':10}
               ]
           }";
}
elseif($id==4)
{

    $t="{'name':'The stars', 'city':'Paris',
        'players':[
                   {'name':'Rabih','age':5,'numero':7},
                   {'name':'Miguel','age':12,'numero':2}, 
                   {'name':'TITO','age':88,'numero':888},
                   {'name':'SISO','age':44,'numero':999},
                   {'name':'Mimo','age':20,'numero':10},
                   {'name':'Rabih','age':5,'numero':7},
                   {'name':'Miguel','age':12,'numero':2}, 
                   {'name':'TITO','age':88,'numero':888},
                   {'name':'SISO','age':44,'numero':999},
                   {'name':'Mimo','age':20,'numero':10}
               ]
           }";
}
else
{
    $t="{'error':'No such ID'}";

}
echo $t;
?>
