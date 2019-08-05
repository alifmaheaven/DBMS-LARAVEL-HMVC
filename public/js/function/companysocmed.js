

//console.log(Socmedstable);

if (Socmedstable.length > 0) {

    let htmlSocmeds = ''
    let nomorSocmeds = 0

    Socmedstable.forEach(data => {
    //console.log(data);
    for (let i = 0; i < Socmedtype.length; i++) {
        if (Socmedtype[i].id_socmedtype == data.id_socmedtype) {
            var companySocmedpositionname = Socmedtype[i].socmedtype_name
        }
    }
    if (data.is_active == 1) {
        var companySocmedisactive = "aktif"
    } else{
        var companySocmedisactive = "non aktif"
    }
    var arraySocmeds = nomorSocmeds
    nomorSocmeds += 1
    htmlSocmeds += '<tr><td>'+nomorSocmeds+'</td><td>'+companySocmedpositionname+'</td><td>'+data.socmed_name+'</td><td>'+companySocmedisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arraySocmeds+'" onclick="deleteSocmedstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arraySocmeds+'" onclick="editSocmedstablerow(this);" data-toggle="modal" data-target="#editSocmed" >Edit</button></td></tr>'
    $("#Socmedstableid").find('tbody').html(htmlSocmeds).show();

  
});
    

} else {

//console.log('halo');    
}



function deleteSocmedstablerow(data){     
    
    remSocmedstable.push(Socmedstable[$(data).data('array')].id_companysocmed)
    //console.log("akan dihapus :");
    //console.log(remSocmedstable);
    
    
    Socmedstable.splice($(data).data('array'), 1);     
    //console.log(Socmedstable);

    

    let htmlSocmeds = ''
    let nomorSocmeds = 0

    if (Socmedstable.length > 0) {
        
    
        Socmedstable.forEach(data => {
        //console.log(data);
        for (let i = 0; i < Socmedtype.length; i++) {
            if (Socmedtype[i].id_socmedtype == data.id_socmedtype) {
                var companySocmedpositionname = Socmedtype[i].socmedtype_name
            }
        }
        if (data.is_active == 1) {
            var companySocmedisactive = "aktif"
        } else{
            var companySocmedisactive = "non aktif"
        }
        var arraySocmeds = nomorSocmeds
        nomorSocmeds += 1
        htmlSocmeds += '<tr><td>'+nomorSocmeds+'</td><td>'+companySocmedpositionname+'</td><td>'+data.socmed_name+'</td><td>'+companySocmedisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arraySocmeds+'" onclick="deleteSocmedstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arraySocmeds+'" onclick="editSocmedstablerow(this);" data-toggle="modal" data-target="#editSocmed" >Edit</button></td></tr>'
        $("#Socmedstableid").find('tbody').html(htmlSocmeds).show();
    
      
    });
    } else{
        htmlSocmeds += '<tr><td></td><td></td><td></td><td></td><td></tr>'
     $("#Socmedstableid").find('tbody').html(htmlSocmeds).show();
    }
     
    }

    
    function editSocmedstablerow(data){     
   // Socmedstable.splice($(data).data('array'), 1);     
    //console.log(Socmedstable);

    $('#editSocmed').find('.modal-body').find("#edit_Socmedarray").val($(data).data('array'));
    $('#editSocmed').find('.modal-body').find("#edit_Socmedname").val(Socmedstable[$(data).data('array')].socmed_name);
    $('#editSocmed').find('.modal-body').find("#edit_socmedtype").val(Socmedstable[$(data).data('array')].id_socmedtype);
    $('#editSocmed').find('.modal-body').find("#edit_Socmedactif").val(Socmedstable[$(data).data('array')].is_active);

    }



$(document).ready(function() {
$('#addSocmedbutton').click(function(e){ //on add input button click
e.preventDefault();

//Socmedname
var addSocmedname = document.getElementById('add_Socmedname').value
//posision select
var addsocmedtype = document.getElementById('add_socmedtype')
var optionsocmedtype = addsocmedtype .options[addsocmedtype .selectedIndex].value;

//Socmedactive
var addSocmedactif = document.getElementById('add_Socmedactif')
var optionSocmedactif = addSocmedactif.options[addSocmedactif.selectedIndex].value;
Socmedstable.push({
                id_companysocmed: '' ,
                id_companydetail: '' ,
                id_socmedtype: optionsocmedtype,
                socmed_name: addSocmedname,
                is_active : optionSocmedactif,
                })

//console.log(Socmedstable);

    let htmlSocmeds = ''
    let nomorSocmeds = 0

    Socmedstable.forEach(data => {
    //console.log(data);
    for (let i = 0; i < Socmedtype.length; i++) {
        if (Socmedtype[i].id_socmedtype == data.id_socmedtype) {
            var companySocmedpositionname = Socmedtype[i].socmedtype_name
        }
    }
    if (data.is_active == 1) {
        var companySocmedisactive = "aktif"
    } else{
        var companySocmedisactive = "non aktif"
    }
    var arraySocmeds = nomorSocmeds
    nomorSocmeds += 1
    htmlSocmeds += '<tr><td>'+nomorSocmeds+'</td><td>'+companySocmedpositionname+'</td><td>'+data.socmed_name+'</td><td>'+companySocmedisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arraySocmeds+'" onclick="deleteSocmedstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arraySocmeds+'" onclick="editSocmedstablerow(this);" data-toggle="modal" data-target="#editSocmed" >Edit</button></td></tr>'
    $("#Socmedstableid").find('tbody').html(htmlSocmeds).show();

  
});
jQuery.noConflict();
$("#addSocmed").removeClass("in");
$(".modal-backdrop").remove();
$("#addSocmed").hide();
$('#addSocmed').modal('hide');
     });



$('#editSocmedbutton').click(function(e){ //on add input button click
e.preventDefault();

//array 
var editSocmedarray = document.getElementById('edit_Socmedarray').value
//Socmedname
var editSocmedname = document.getElementById('edit_Socmedname').value
//posision select
var editsocmedtype = document.getElementById('edit_socmedtype')
var optionsocmedtype = editsocmedtype .options[editsocmedtype .selectedIndex].value;

//Socmedactive
var editSocmedactif = document.getElementById('edit_Socmedactif')
var optionSocmedactif = editSocmedactif.options[editSocmedactif.selectedIndex].value;

Socmedstable[editSocmedarray].socmed_name = editSocmedname
Socmedstable[editSocmedarray].id_socmedtype = optionsocmedtype
Socmedstable[editSocmedarray].is_active = optionSocmedactif


//console.log(Socmedstable);
let htmlSocmeds = ''
    let nomorSocmeds = 0

    Socmedstable.forEach(data => {
    //console.log(data);
    for (let i = 0; i < Socmedtype.length; i++) {
        if (Socmedtype[i].id_socmedtype == data.id_socmedtype) {
            var companySocmedpositionname = Socmedtype[i].socmedtype_name
        }
    }
    if (data.is_active == 1) {
        var companySocmedisactive = "aktif"
    } else{
        var companySocmedisactive = "non aktif"
    }
    var arraySocmeds = nomorSocmeds
    nomorSocmeds += 1
    htmlSocmeds += '<tr><td>'+nomorSocmeds+'</td><td>'+companySocmedpositionname+'</td><td>'+data.socmed_name+'</td><td>'+companySocmedisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arraySocmeds+'" onclick="deleteSocmedstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arraySocmeds+'" onclick="editSocmedstablerow(this);" data-toggle="modal" data-target="#editSocmed" >Edit</button></td></tr>'
    $("#Socmedstableid").find('tbody').html(htmlSocmeds).show();

  
});
jQuery.noConflict();
$("#editSocmed").removeClass("in");
$(".modal-backdrop").remove();
$("#editSocmed").hide();
$('#editSocmed').modal('hide');
     });


    });




Socmedtype.forEach(data => {
    //console.log(data);
    $('<option value="'+data.id_socmedtype+'">'+data.socmedtype_name+'</option>').appendTo('#add_socmedtype');
    $('<option value="'+data.id_socmedtype+'">'+data.socmedtype_name+'</option>').appendTo('#edit_socmedtype');
});
