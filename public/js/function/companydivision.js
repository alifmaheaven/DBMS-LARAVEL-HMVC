

//console.log(Divisionstable);

if (Divisionstable.length > 0) {

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
    htmlDivisions += '<tr><td>'+nomorDivisions+'</td><td>'+data.companydivision_name +'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayDivisions+'" onclick="deleteDivisionstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayDivisions+'" onclick="editDivisionstablerow(this);" data-toggle="modal" data-target="#editDivision" >Edit</button></td></tr>'
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
     
        var arrayDivisions = nomorDivisions
        nomorDivisions += 1
        htmlDivisions += '<tr><td>'+nomorDivisions+'</td><td>'+data.companydivision_name +'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayDivisions+'" onclick="deleteDivisionstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayDivisions+'" onclick="editDivisionstablerow(this);" data-toggle="modal" data-target="#editDivision" >Edit</button></td></tr>'
        $("#Divisionstableid").find('tbody').html(htmlDivisions).show();
    
      
    });
    } else{
        htmlDivisions += '<tr><td></td><td></td><td></td></tr>'
        $("#Divisionstableid").find('tbody').html(htmlDivisions).show();
    }
     
    }

    
    function editDivisionstablerow(data){     
   // Divisionstable.splice($(data).data('array'), 1);     
    //console.log(Divisionstable);

    $('#editDivision').find('.modal-body').find("#edit_Divisionarray").val($(data).data('array'));
    $('#editDivision').find('.modal-body').find("#edit_Divisionname").val(Divisionstable[$(data).data('array')].companydivision_name);
   

    }

    alertnyaDivision = function() {}
    alertnyaDivision.edit = function(message1,message2) {
            $('#allertDevisionedit').html('<div style="display:block;" class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><Strong>'+message1+' </Strong>'+message2+'</div>')
    }
    alertnyaDivision.add = function(message1,message2) {
        $('#allertDevisionadd').html('<div style="display:block;" class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><Strong>'+message1+' </Strong>'+message2+'</div>')
    }


$(document).ready(function() {
$('#addDivisionbutton').click(function(e){ //on add input button click
e.preventDefault();

//Divisionname
var addDivisionname = document.getElementById('add_Divisionname').value

if (addDivisionname == "") {
    alertnyaDivision.add('Sorry,','Division Name Field cannot be empty');
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 4000);
return false
}

Divisionstable.push({
                id_companydivision: '' ,
                id_companydetail: '' ,
                companydivision_name: addDivisionname,
                is_active : 1,
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
    htmlDivisions += '<tr><td>'+nomorDivisions+'</td><td>'+data.companydivision_name +'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayDivisions+'" onclick="deleteDivisionstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayDivisions+'" onclick="editDivisionstablerow(this);" data-toggle="modal" data-target="#editDivision" >Edit</button></td></tr>'
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

//validation add Division
if (editDivisionname == "") {
    alertnyaDivision.edit('Sorry,','Division Name Field cannot be empty');
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 4000);
return false
}
Divisionstable[editDivisionarray].companydivision_name = editDivisionname



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
            htmlDivisions += '<tr><td>'+nomorDivisions+'</td><td>'+data.companydivision_name +'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayDivisions+'" onclick="deleteDivisionstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayDivisions+'" onclick="editDivisionstablerow(this);" data-toggle="modal" data-target="#editDivision" >Edit</button></td></tr>'
            $("#Divisionstableid").find('tbody').html(htmlDivisions).show();


            });
jQuery.noConflict();
$("#editDivision").removeClass("in");
$(".modal-backdrop").remove();
$("#editDivision").hide();
$('#editDivision').modal('hide');
     });


    });



