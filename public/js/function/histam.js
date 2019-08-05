

//console.log(Histsstable);

if (Histsstable.length > 0) {

   
let htmlHistss = ''
let nomorHistss = 0

Histsstable.forEach(data => {
//console.log(data);

if (data.is_active == 1) {
    var companyHistsisactive = "aktif"
} else{
    var companyHistsisactive = "non aktif"
}
var arrayHistss = nomorHistss
nomorHistss += 1
htmlHistss += '<tr><td>'+nomorHistss+'</td><td>'+data.hist_am_name+'</td><td>'+companyHistsisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayHistss+'" onclick="deleteHistsstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayHistss+'" onclick="editHistsstablerow(this);" data-toggle="modal" data-target="#editHists" >Edit</button></td></tr>'
$("#Histsstableid").find('tbody').html(htmlHistss).show();


});
    

} else {

//console.log('halo');    
}



function deleteHistsstablerow(data){     
    
    remHistsstable.push(Histsstable[$(data).data('array')].id_hist_am)
    //console.log("akan dihapus :");
    //console.log(remHistsstable);
    
    
    Histsstable.splice($(data).data('array'), 1);     
    //console.log(Histsstable);

    

    let htmlHistss = ''
    let nomorHistss = 0

    if (Histsstable.length > 0) {
       
    
        Histsstable.forEach(data => {
        //console.log(data);
       
        if (data.is_active == 1) {
            var companyHistsisactive = "aktif"
        } else{
            var companyHistsisactive = "non aktif"
        }
        var arrayHistss = nomorHistss
        nomorHistss += 1
        htmlHistss += '<tr><td>'+nomorHistss+'</td><td>'+data.hist_am_name+'</td><td>'+companyHistsisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayHistss+'" onclick="deleteHistsstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayHistss+'" onclick="editHistsstablerow(this);" data-toggle="modal" data-target="#editHists" >Edit</button></td></tr>'
        $("#Histsstableid").find('tbody').html(htmlHistss).show();
    
      
    });
    } else{
    htmlHistss += '<tr><td></td><td></td><td></td><td></td></tr>'
     $("#Histsstableid").find('tbody').html(htmlHistss).show();
    }
     
    }

    
    function editHistsstablerow(data){     
   // Histsstable.splice($(data).data('array'), 1);     
    //console.log(Histsstable);

    $('#editHists').find('.modal-body').find("#edit_Histsarray").val($(data).data('array'));
    $('#editHists').find('.modal-body').find("#edit_Histsname").val(Histsstable[$(data).data('array')].hist_am_name);
    $('#editHists').find('.modal-body').find("#edit_Histsactif").val(Histsstable[$(data).data('array')].is_active);

    }



$(document).ready(function() {
$('#addHistsbutton').click(function(e){ //on add input button click
e.preventDefault();

//Histsname
var addHistsname = document.getElementById('add_Histsname').value

//Histsactive
var addHistsactif = document.getElementById('add_Histsactif')
var optionHistsactif = addHistsactif.options[addHistsactif.selectedIndex].value;
Histsstable.push({
                id_hist_am: '' ,
                id_companydetail: '' ,
                hist_am_name: addHistsname,
               
                is_active : optionHistsactif,
                })

//console.log(Histsstable);

    let htmlHistss = ''
    let nomorHistss = 0

    Histsstable.forEach(data => {
    //console.log(data);
   
    if (data.is_active == 1) {
        var companyHistsisactive = "aktif"
    } else{
        var companyHistsisactive = "non aktif"
    }
    var arrayHistss = nomorHistss
    nomorHistss += 1
    htmlHistss += '<tr><td>'+nomorHistss+'</td><td>'+data.hist_am_name+'</td><td>'+companyHistsisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayHistss+'" onclick="deleteHistsstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayHistss+'" onclick="editHistsstablerow(this);" data-toggle="modal" data-target="#editHists" >Edit</button></td></tr>'
    $("#Histsstableid").find('tbody').html(htmlHistss).show();

  
});
jQuery.noConflict();
$("#addHists").removeClass("in");
$(".modal-backdrop").remove();
$("#addHists").hide();
$('#addHists').modal('hide');
     });



$('#editHistsbutton').click(function(e){ //on add input button click
e.preventDefault();

//array 
var editHistsarray = document.getElementById('edit_Histsarray').value
//Histsname
var editHistsname = document.getElementById('edit_Histsname').value

//Histsactive
var editHistsactif = document.getElementById('edit_Histsactif')
var optionHistsactif = editHistsactif.options[editHistsactif.selectedIndex].value;

Histsstable[editHistsarray].hist_am_name = editHistsname

Histsstable[editHistsarray].is_active = optionHistsactif


//console.log(Histsstable);

let htmlHistss = ''
let nomorHistss = 0

Histsstable.forEach(data => {
//console.log(data);

if (data.is_active == 1) {
    var companyHistsisactive = "aktif"
} else{
    var companyHistsisactive = "non aktif"
}
var arrayHistss = nomorHistss
nomorHistss += 1
htmlHistss += '<tr><td>'+nomorHistss+'</td><td>'+data.hist_am_name+'</td><td>'+companyHistsisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayHistss+'" onclick="deleteHistsstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayHistss+'" onclick="editHistsstablerow(this);" data-toggle="modal" data-target="#editHists" >Edit</button></td></tr>'
$("#Histsstableid").find('tbody').html(htmlHistss).show();


});
jQuery.noConflict();
$("#editHists").removeClass("in");
$(".modal-backdrop").remove();
$("#editHists").hide();
$('#editHists').modal('hide');
     });


    });




position.forEach(data => {
    //console.log(data);
    $('<option value="'+data.id_position+'">'+data.position_name+'</option>').appendTo('#add_Histsposition');
    $('<option value="'+data.id_position+'">'+data.position_name+'</option>').appendTo('#edit_Histsposition');
});
