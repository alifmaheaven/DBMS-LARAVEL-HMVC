

//console.log(Bodstable);

if (Bodstable.length > 0) {

   let htmlbods = ''
    let nomorbods = 0

    Bodstable.forEach(data => {
    //console.log(data);
    for (let i = 0; i < position.length; i++) {
        if (position[i].id_position == data.id_position) {
            var companybodpositionname = position[i].position_name
        }
    }
    if (data.is_active == 1) {
        var companybodisactive = "aktif"
    } else{
        var companybodisactive = "non aktif"
    }
    var arrayBods = nomorbods
    nomorbods += 1
    htmlbods += '<tr><td>'+nomorbods+'</td><td>'+data.companybod_name+'</td><td>'+companybodpositionname+'</td><td>'+data.companybod_birthday+'</td><td>'+data.companybod_phone+'</td><td>'+data.companybod_email+'</td><td>'+companybodisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayBods+'" onclick="deleteBodstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayBods+'" onclick="editBodstablerow(this);" data-toggle="modal" data-target="#editBod" >Edit</button></td></tr>'
    $("#Bodstableid").find('tbody').html(htmlbods).show();

  
});
    

} else {

//console.log('halo');    
}



function deleteBodstablerow(data){     
    
    remBodstable.push(Bodstable[$(data).data('array')].id_companybod)
    //console.log("akan dihapus :");
    //console.log(remBodstable);
    
    
    Bodstable.splice($(data).data('array'), 1);     
    //console.log(Bodstable);

    

    let htmlbods = ''
    let nomorbods = 0

    if (Bodstable.length > 0) {
        Bodstable.forEach(data => {
    //console.log(data);
    for (let i = 0; i < position.length; i++) {
        if (position[i].id_position == data.id_position) {
            var companybodpositionname = position[i].position_name
        }
    }
    if (data.is_active == 1) {
        var companybodisactive = "aktif"
    } else{
        var companybodisactive = "non aktif"
    }
    var arrayBods = nomorbods
    nomorbods += 1
    htmlbods += '<tr><td>'+nomorbods+'</td><td>'+data.companybod_name+'</td><td>'+companybodpositionname+'</td><td>'+data.companybod_birthday+'</td><td>'+data.companybod_phone+'</td><td>'+data.companybod_email+'</td><td>'+companybodisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayBods+'" onclick="deleteBodstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayBods+'" onclick="editBodstablerow(this);" data-toggle="modal" data-target="#editBod" >Edit</button></td></tr>'
     $("#Bodstableid").find('tbody').html(htmlbods).show();
    }); 
    } else{
        htmlbods += '<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
     $("#Bodstableid").find('tbody').html(htmlbods).show();
    }
     
    }

    
    function editBodstablerow(data){     
   // Bodstable.splice($(data).data('array'), 1);     
    //console.log(Bodstable);

    $('#editBod').find('.modal-body').find("#edit_Bodarray").val($(data).data('array'));
    $('#editBod').find('.modal-body').find("#edit_Bodname").val(Bodstable[$(data).data('array')].companybod_name);
    $('#editBod').find('.modal-body').find("#edit_Bodposition").val(Bodstable[$(data).data('array')].id_position);
    $('#editBod').find('.modal-body').find("#edit_Bodbirthday").val(Bodstable[$(data).data('array')].companybod_birthday);  
    $('#editBod').find('.modal-body').find("#edit_Bodphone").val(Bodstable[$(data).data('array')].companybod_phone);
    $('#editBod').find('.modal-body').find("#edit_Bodemail").val(Bodstable[$(data).data('array')].companybod_email);
    $('#editBod').find('.modal-body').find("#edit_Bodactif").val(Bodstable[$(data).data('array')].is_active);

    }



$(document).ready(function() {
$('#addBodbutton').click(function(e){ //on add input button click
e.preventDefault();

//Bodname
var addBodname = document.getElementById('add_Bodname').value
//posision select
var addBodposition = document.getElementById('add_Bodposition')
var optionBodPosition = addBodposition.options[addBodposition.selectedIndex].value;
//bodbirthday
var addBodbirthday = document.getElementById('add_Bodbirthday').value
//bodphone
var addBodphone = document.getElementById('add_Bodphone').value
//bodemail
var addBodemail = document.getElementById('add_Bodemail').value
//bodactive
var addBodactif = document.getElementById('add_Bodactif')
var optionBodactif = addBodactif.options[addBodactif.selectedIndex].value;
Bodstable.push({
                id_companybod: '' ,
                id_companydetail: '' ,
                companybod_name: addBodname,
                id_position: optionBodPosition,
                companybod_birthday: addBodbirthday,
                companybod_phone: addBodphone,
                companybod_email: addBodemail,
                is_active : optionBodactif,
                })

//console.log(Bodstable);

    let htmlbods = ''
    let nomorbods = 0

    Bodstable.forEach(data => {
    //console.log(data);
    for (let i = 0; i < position.length; i++) {
        if (position[i].id_position == data.id_position) {
            var companybodpositionname = position[i].position_name
        }
    }
    if (data.is_active == 1) {
        var companybodisactive = "aktif"
    } else{
        var companybodisactive = "non aktif"
    }
    var arrayBods = nomorbods
    nomorbods += 1
    htmlbods += '<tr><td>'+nomorbods+'</td><td>'+data.companybod_name+'</td><td>'+companybodpositionname+'</td><td>'+data.companybod_birthday+'</td><td>'+data.companybod_phone+'</td><td>'+data.companybod_email+'</td><td>'+companybodisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayBods+'" onclick="deleteBodstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayBods+'" onclick="editBodstablerow(this);" data-toggle="modal" data-target="#editBod" >Edit</button></td></tr>'
    $("#Bodstableid").find('tbody').html(htmlbods).show();

  
});
jQuery.noConflict();
$("#addBod").removeClass("in");
$(".modal-backdrop").remove();
$("#addBod").hide();
$('#addBod').modal('hide');
     });



$('#editBodbutton').click(function(e){ //on add input button click
e.preventDefault();

//array 
var editbodarray = document.getElementById('edit_Bodarray').value
//Bodname
var editBodname = document.getElementById('edit_Bodname').value
//posision select
var editBodposition = document.getElementById('edit_Bodposition')
var optionBodPosition = editBodposition.options[editBodposition.selectedIndex].value;
//bodbirthday
var editBodbirthday = document.getElementById('edit_Bodbirthday').value
//bodphone
var editBodphone = document.getElementById('edit_Bodphone').value
//bodemail
var editBodemail = document.getElementById('edit_Bodemail').value
//bodactive
var editBodactif = document.getElementById('edit_Bodactif')
var optionBodactif = editBodactif.options[editBodactif.selectedIndex].value;

Bodstable[editbodarray].companybod_name = editBodname
Bodstable[editbodarray].id_position = optionBodPosition
Bodstable[editbodarray].companybod_birthday = editBodbirthday
Bodstable[editbodarray].companybod_phone = editBodphone
Bodstable[editbodarray].companybod_email = editBodemail
Bodstable[editbodarray].is_active = optionBodactif


//console.log(Bodstable);

    let htmlbods = ''
    let nomorbods = 0

    Bodstable.forEach(data => {
    //console.log(data);
    for (let i = 0; i < position.length; i++) {
        if (position[i].id_position == data.id_position) {
            var companybodpositionname = position[i].position_name
        }
    }
    if (data.is_active == 1) {
        var companybodisactive = "aktif"
    } else{
        var companybodisactive = "non aktif"
    }
    var arrayBods = nomorbods
    nomorbods += 1
    htmlbods += '<tr><td>'+nomorbods+'</td><td>'+data.companybod_name+'</td><td>'+companybodpositionname+'</td><td>'+data.companybod_birthday+'</td><td>'+data.companybod_phone+'</td><td>'+data.companybod_email+'</td><td>'+companybodisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayBods+'" onclick="deleteBodstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayBods+'" onclick="editBodstablerow(this);" data-toggle="modal" data-target="#editBod" >Edit</button></td></tr>'
    $("#Bodstableid").find('tbody').html(htmlbods).show();

  
});
jQuery.noConflict();
$("#editBod").removeClass("in");
$(".modal-backdrop").remove();
$("#editBod").hide();
$('#editBod').modal('hide');
     });


    });




position.forEach(data => {
    //console.log(data);
    $('<option value="'+data.id_position+'">'+data.position_name+'</option>').appendTo('#add_Bodposition');
    $('<option value="'+data.id_position+'">'+data.position_name+'</option>').appendTo('#edit_Bodposition');
});
