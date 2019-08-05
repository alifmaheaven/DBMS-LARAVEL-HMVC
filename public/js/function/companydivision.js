

//console.log(Divisionstable);

if (Divisionstable.length > 0) {

    let htmlDivisions = ''
    let nomorDivisions = 0

    Divisionstable.forEach(data => {
    //console.log(data);
    for (let i = 0; i < position.length; i++) {
        if (position[i].id_position == data.id_position) {
            var companyDivisionpositionname = position[i].position_name
        }
    }
    if (data.is_active == 1) {
        var companyDivisionisactive = "aktif"
    } else{
        var companyDivisionisactive = "non aktif"
    }
    var arrayDivisions = nomorDivisions
    nomorDivisions += 1
    htmlDivisions += '<tr><td>'+nomorDivisions+'</td><td>'+data.companyDivision_name+'</td><td>'+companyDivisionpositionname+'</td><td>'+data.companyDivision_birthday+'</td><td>'+data.companyDivision_phone+'</td><td>'+data.companyDivision_email+'</td><td>'+companyDivisionisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayDivisions+'" onclick="deleteDivisionstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayDivisions+'" onclick="editDivisionstablerow(this);" data-toggle="modal" data-target="#editDivision" >Edit</button></td></tr>'
    $("#Divisionstableid").find('tbody').html(htmlDivisions).show();
    });
    

} else {

//console.log('halo');    
}



function deleteDivisionstablerow(data){     
    
    remDivisionstable.push(Divisionstable[$(data).data('array')].id_companydivision)
    console.log("akan dihapus :");
    console.log(remDivisionstable);
    
    
    Divisionstable.splice($(data).data('array'), 1);     
    //console.log(Divisionstable);

    

    let htmlDivisions = ''
    let nomorDivisions = 0


    if (Divisionstable.length > 0) {
       
        Divisionstable.forEach(data => {
        //console.log(data);
       
        if (data.is_active == 1) {
            var companyDivisionisactive = "aktif"
        } else{
            var companyDivisionisactive = "non aktif"
        }
        var arrayDivisions = nomorDivisions
        nomorDivisions += 1
        htmlDivisions += '<tr><td>'+nomorDivisions+'</td><td>'+data.companydivision_name +'</td><td>'+companyDivisionisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayDivisions+'" onclick="deleteDivisionstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayDivisions+'" onclick="editDivisionstablerow(this);" data-toggle="modal" data-target="#editDivision" >Edit</button></td></tr>'
        $("#Divisionstableid").find('tbody').html(htmlDivisions).show();
    
      
    });
    } else{
        htmlDivisions += '<tr><td></td><td></td><td></td><td></td></tr>'
        $("#Divisionstableid").find('tbody').html(htmlDivisions).show();
    }
     
    }

    
    function editDivisionstablerow(data){     
   // Divisionstable.splice($(data).data('array'), 1);     
    //console.log(Divisionstable);

    $('#editDivision').find('.modal-body').find("#edit_Divisionarray").val($(data).data('array'));
    $('#editDivision').find('.modal-body').find("#edit_Divisionname").val(Divisionstable[$(data).data('array')].companydivision_name);
    $('#editDivision').find('.modal-body').find("#edit_Divisionactif").val(Divisionstable[$(data).data('array')].is_active);

    }



$(document).ready(function() {
$('#addDivisionbutton').click(function(e){ //on add input button click
e.preventDefault();

//Divisionname
var addDivisionname = document.getElementById('add_Divisionname').value

//Divisionactive
var addDivisionactif = document.getElementById('add_Divisionactif')
var optionDivisionactif = addDivisionactif.options[addDivisionactif.selectedIndex].value;
Divisionstable.push({
                id_companydivision: '' ,
                id_companydetail: '' ,
                companydivision_name: addDivisionname,
                is_active : optionDivisionactif,
                })

//console.log(Divisionstable);

    let htmlDivisions = ''
    let nomorDivisions = 0

    Divisionstable.forEach(data => {
    //console.log(data);
   
    if (data.is_active == 1) {
        var companyDivisionisactive = "aktif"
    } else{
        var companyDivisionisactive = "non aktif"
    }
    var arrayDivisions = nomorDivisions
    nomorDivisions += 1
    htmlDivisions += '<tr><td>'+nomorDivisions+'</td><td>'+data.companydivision_name +'</td><td>'+companyDivisionisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayDivisions+'" onclick="deleteDivisionstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayDivisions+'" onclick="editDivisionstablerow(this);" data-toggle="modal" data-target="#editDivision" >Edit</button></td></tr>'
    $("#Divisionstableid").find('tbody').html(htmlDivisions).show();

  
});
jQuery.noConflict();
$("#addDivision").removeClass("in");
$(".modal-backdrop").remove();
$("#addDivision").hide();
$('#addDivision').modal('hide');
     });



$('#editDivisionbutton').click(function(e){ //on add input button click
e.preventDefault();

//array 
var editDivisionarray = document.getElementById('edit_Divisionarray').value
//Divisionname
var editDivisionname = document.getElementById('edit_Divisionname').value
//Divisionactive
var editDivisionactif = document.getElementById('edit_Divisionactif')
var optionDivisionactif = editDivisionactif.options[editDivisionactif.selectedIndex].value;

Divisionstable[editDivisionarray].companydivision_name = editDivisionname

Divisionstable[editDivisionarray].is_active = optionDivisionactif


//console.log(Divisionstable);

            let htmlDivisions = ''
            let nomorDivisions = 0

            Divisionstable.forEach(data => {
            //console.log(data);

            if (data.is_active == 1) {
                var companyDivisionisactive = "aktif"
            } else{
                var companyDivisionisactive = "non aktif"
            }
            var arrayDivisions = nomorDivisions
            nomorDivisions += 1
            htmlDivisions += '<tr><td>'+nomorDivisions+'</td><td>'+data.companydivision_name +'</td><td>'+companyDivisionisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayDivisions+'" onclick="deleteDivisionstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayDivisions+'" onclick="editDivisionstablerow(this);" data-toggle="modal" data-target="#editDivision" >Edit</button></td></tr>'
            $("#Divisionstableid").find('tbody').html(htmlDivisions).show();


            });
jQuery.noConflict();
$("#editDivision").removeClass("in");
$(".modal-backdrop").remove();
$("#editDivision").hide();
$('#editDivision').modal('hide');
     });


    });



