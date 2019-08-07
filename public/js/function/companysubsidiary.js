

//console.log(Subsidiarystable);

if (Subsidiarystable.length > 0) {

    let htmlSubsidiarys = ''
    let nomorSubsidiarys = 0
    
    Subsidiarystable.forEach(data => {
    //console.log(data);
    
    if (data.is_active == 1) {
        var companySubsidiaryisactive = "aktif"
    } else{
        var companySubsidiaryisactive = "non aktif"
    }
    var arraySubsidiarys = nomorSubsidiarys
    nomorSubsidiarys += 1
    htmlSubsidiarys += '<tr><td>'+nomorSubsidiarys+'</td><td>'+data.companysubsidiary_name+'</td><td><button class="btn btn-primary btn-round" data-array="'+arraySubsidiarys+'" onclick="deleteSubsidiarystablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arraySubsidiarys+'" onclick="editSubsidiarystablerow(this);" data-toggle="modal" data-target="#editSubsidiary" >Edit</button></td></tr>'
    $("#Subsidiarystableid").find('tbody').html(htmlSubsidiarys).show();
    
    
    });
    

} else {

//console.log('halo');    
}



function deleteSubsidiarystablerow(data){     
    
    remSubsidiarystable.push(Subsidiarystable[$(data).data('array')].id_companysubsidiary)
    //console.log("akan dihapus :");
    //console.log(remSubsidiarystable);
    
    
    Subsidiarystable.splice($(data).data('array'), 1);     
    //console.log(Subsidiarystable);

    

    let htmlSubsidiarys = ''
    let nomorSubsidiarys = 0

    if (Subsidiarystable.length > 0) {
  
    Subsidiarystable.forEach(data => {
    //console.log(data);
    
    if (data.is_active == 1) {
        var companySubsidiaryisactive = "aktif"
    } else{
        var companySubsidiaryisactive = "non aktif"
    }
    var arraySubsidiarys = nomorSubsidiarys
    nomorSubsidiarys += 1
    htmlSubsidiarys += '<tr><td>'+nomorSubsidiarys+'</td><td>'+data.companysubsidiary_name+'</td><td><button class="btn btn-primary btn-round" data-array="'+arraySubsidiarys+'" onclick="deleteSubsidiarystablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arraySubsidiarys+'" onclick="editSubsidiarystablerow(this);" data-toggle="modal" data-target="#editSubsidiary" >Edit</button></td></tr>'
    $("#Subsidiarystableid").find('tbody').html(htmlSubsidiarys).show();

  
});
    } else{
        htmlSubsidiarys += '<tr><td></td><td></td><td></td></tr>'
     $("#Subsidiarystableid").find('tbody').html(htmlSubsidiarys).show();
    }
     
    }

    
    function editSubsidiarystablerow(data){     
   // Subsidiarystable.splice($(data).data('array'), 1);     
    //console.log(Subsidiarystable);

    $('#editSubsidiary').find('.modal-body').find("#edit_Subsidiaryarray").val($(data).data('array'));
    $('#editSubsidiary').find('.modal-body').find("#edit_Subsidiaryname").val(Subsidiarystable[$(data).data('array')].companysubsidiary_name);
   
    }



$(document).ready(function() {
$('#addSubsidiarybutton').click(function(e){ //on add input button click
e.preventDefault();

//Subsidiaryname
var addSubsidiaryname = document.getElementById('add_Subsidiaryname').value

Subsidiarystable.push({
                id_companysubsidiary: '' ,
                id_companydetail: '' ,
                companysubsidiary_name: addSubsidiaryname, 
                is_active :1,
                })

//console.log(Subsidiarystable);

    let htmlSubsidiarys = ''
    let nomorSubsidiarys = 0

    Subsidiarystable.forEach(data => {
    //console.log(data);
    
    if (data.is_active == 1) {
        var companySubsidiaryisactive = "aktif"
    } else{
        var companySubsidiaryisactive = "non aktif"
    }
    var arraySubsidiarys = nomorSubsidiarys
    nomorSubsidiarys += 1
    htmlSubsidiarys += '<tr><td>'+nomorSubsidiarys+'</td><td>'+data.companysubsidiary_name+'</td><td><button class="btn btn-primary btn-round" data-array="'+arraySubsidiarys+'" onclick="deleteSubsidiarystablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arraySubsidiarys+'" onclick="editSubsidiarystablerow(this);" data-toggle="modal" data-target="#editSubsidiary" >Edit</button></td></tr>'
    $("#Subsidiarystableid").find('tbody').html(htmlSubsidiarys).show();

  
});
jQuery.noConflict();
$("#addSubsidiary").removeClass("in");
$(".modal-backdrop").remove();
$("#addSubsidiary").hide();
$('#addSubsidiary').modal('hide');
     });



$('#editSubsidiarybutton').click(function(e){ //on add input button click
e.preventDefault();

//array 
var editSubsidiaryarray = document.getElementById('edit_Subsidiaryarray').value
//Subsidiaryname
var editSubsidiaryname = document.getElementById('edit_Subsidiaryname').value


Subsidiarystable[editSubsidiaryarray].companysubsidiary_name = editSubsidiaryname



//console.log(Subsidiarystable);

let htmlSubsidiarys = ''
let nomorSubsidiarys = 0

Subsidiarystable.forEach(data => {
//console.log(data);

if (data.is_active == 1) {
    var companySubsidiaryisactive = "aktif"
} else{
    var companySubsidiaryisactive = "non aktif"
}
var arraySubsidiarys = nomorSubsidiarys
nomorSubsidiarys += 1
htmlSubsidiarys += '<tr><td>'+nomorSubsidiarys+'</td><td>'+data.companysubsidiary_name+'</td><td><button class="btn btn-primary btn-round" data-array="'+arraySubsidiarys+'" onclick="deleteSubsidiarystablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arraySubsidiarys+'" onclick="editSubsidiarystablerow(this);" data-toggle="modal" data-target="#editSubsidiary" >Edit</button></td></tr>'
$("#Subsidiarystableid").find('tbody').html(htmlSubsidiarys).show();


});
jQuery.noConflict();
$("#editSubsidiary").removeClass("in");
$(".modal-backdrop").remove();
$("#editSubsidiary").hide();
$('#editSubsidiary').modal('hide');
     });


    });



