

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
    htmlSocmeds += '<tr><td style="text-align:center;">'+nomorSocmeds+'</td><td style="text-align:center;">'+companySocmedpositionname+'</td><td style="text-align:center;">'+data.socmed_name+'</td><td><button style="margin-right:230px;" class="btn btn-primary btn-round" data-array="'+arraySocmeds+'" onclick="deleteSocmedstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arraySocmeds+'" onclick="editSocmedstablerow(this);" data-toggle="modal" data-target="#editSocmed" >Edit</button></td></tr>'
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
        htmlSocmeds += '<tr><td style="text-align:center;">'+nomorSocmeds+'</td><td style="text-align:center;">'+companySocmedpositionname+'</td><td style="text-align:center;">'+data.socmed_name+'</td><td><button style="margin-right:230px;" class="btn btn-primary btn-round" data-array="'+arraySocmeds+'" onclick="deleteSocmedstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arraySocmeds+'" onclick="editSocmedstablerow(this);" data-toggle="modal" data-target="#editSocmed" >Edit</button></td></tr>'
        $("#Socmedstableid").find('tbody').html(htmlSocmeds).show();
    
      
    });
    } else{
        htmlSocmeds += '<tr><td></td><td></td><td></td><td></tr>'
     $("#Socmedstableid").find('tbody').html(htmlSocmeds).show();
    }
     
    }

    
    function editSocmedstablerow(data){     
   // Socmedstable.splice($(data).data('array'), 1);     
    //console.log(Socmedstable);

    $('#editSocmed').find('.modal-body').find("#edit_Socmedarray").val($(data).data('array'));
    $('#editSocmed').find('.modal-body').find("#edit_Socmedname").val(Socmedstable[$(data).data('array')].socmed_name);
    $('#editSocmed').find('.modal-body').find("#edit_socmedtype").val(Socmedstable[$(data).data('array')].id_socmedtype);
   
    }

    alertnyaSocmed = function() {}
    alertnyaSocmed.edit = function(message1,message2) {
            $('#allertSocmededit').html('<div style="display:block;" class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><Strong>'+message1+' </Strong>'+message2+'</div>')
    }
    alertnyaSocmed.add = function(message1,message2) {
        $('#allertSocmedadd').html('<div style="display:block;" class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><Strong>'+message1+' </Strong>'+message2+'</div>')
    }



$(document).ready(function() {
$('#addSocmedbutton').click(function(e){ //on add input button click
e.preventDefault();

//Socmedname
var addSocmedname = document.getElementById('add_Socmedname').value
//posision select
var addsocmedtype = document.getElementById('add_socmedtype')
var optionsocmedtype = addsocmedtype .options[addsocmedtype .selectedIndex].value;

//validation add Socmed
if (addSocmedname == "") {
    alertnyaSocmed.add('Sorry,','Socmed Name Field cannot be empty');
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 4000);
return false
}
if (optionsocmedtype == "") {
    alertnyaSocmed.add('Sorry,','Socmed address Field cannot be empty');
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 4000);
return false
}


Socmedstable.push({
                id_companysocmed: '' ,
                id_companydetail: '' ,
                id_socmedtype: optionsocmedtype,
                socmed_name: addSocmedname,
                is_active : 1,
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
    htmlSocmeds += '<tr><td style="text-align:center;">'+nomorSocmeds+'</td><td style="text-align:center;">'+companySocmedpositionname+'</td><td style="text-align:center;">'+data.socmed_name+'</td><td><button style="margin-right:230px;" class="btn btn-primary btn-round" data-array="'+arraySocmeds+'" onclick="deleteSocmedstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arraySocmeds+'" onclick="editSocmedstablerow(this);" data-toggle="modal" data-target="#editSocmed" >Edit</button></td></tr>'
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

//validation edt Socmed

if (optionsocmedtype == "") {
    alertnyaSocmed.edit('Sorry,','Socmed ');
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 4000);
return false
}
if (addSocmedname == "") {
    alertnyaSocmed.edit('Sorry,','Socmed Name Field cannot be empty');
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 4000);
return false
}


Socmedstable[editSocmedarray].socmed_name = editSocmedname
Socmedstable[editSocmedarray].id_socmedtype = optionsocmedtype


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
    htmlSocmeds += '<tr><td style="text-align:center;">'+nomorSocmeds+'</td><td style="text-align:center;">'+companySocmedpositionname+'</td><td style="text-align:center;">'+data.socmed_name+'</td><td><button style="margin-right:230px;" class="btn btn-primary btn-round" data-array="'+arraySocmeds+'" onclick="deleteSocmedstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arraySocmeds+'" onclick="editSocmedstablerow(this);" data-toggle="modal" data-target="#editSocmed" >Edit</button></td></tr>'
    $("#Socmedstableid").find('tbody').html(htmlSocmeds).show();

  
});
jQuery.noConflict();
$("#editSocmed").removeClass("in");
$(".modal-backdrop").remove();
$("#editSocmed").hide();
$('#editSocmed').modal('hide');
     });


    });


    
$('<option value="" selected disabled hidden>Select Socmed Types</option>').appendTo('#add_socmedtype');
    $('<option value="" selected disabled hidden>Select Socmed Types</option>').appendTo('#edit_socmedtype');
Socmedtype.forEach(data => {
    //console.log(data);
    $('<option value="'+data.id_socmedtype+'">'+data.socmedtype_name+'</option>').appendTo('#add_socmedtype');
    $('<option value="'+data.id_socmedtype+'">'+data.socmedtype_name+'</option>').appendTo('#edit_socmedtype');
});
