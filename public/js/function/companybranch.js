

//console.log(Branchstable);

if (Branchstable.length > 0) {

    let htmlbods = ''
    let nomorbods = 0

    Branchstable.forEach(data => {
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
    htmlbods += '<tr><td>'+nomorbods+'</td><td>'+data.companybod_name+'</td><td>'+companybodpositionname+'</td><td>'+data.companybod_birthday+'</td><td>'+data.companybod_phone+'</td><td>'+data.companybod_email+'</td><td>'+companybodisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayBods+'" onclick="deleteBranchstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayBods+'" onclick="editBranchstablerow(this);" data-toggle="modal" data-target="#editBranch" >Edit</button></td></tr>'
    $("#Branchstableid").find('tbody').html(htmlbods).show();
    });
    

} else {

console.log('halo');    
}



function deleteBranchstablerow(data){     
    
    remBranchstable.push(Branchstable[$(data).data('array')].id_companybranch)
    console.log("akan dihapus :");
    console.log(remBranchstable);
    
    
    Branchstable.splice($(data).data('array'), 1);     
    console.log(Branchstable);

    

    let htmlBranchs = ''
    let nomorBranchs = 0

    if (Branchstable.length > 0) {
    

    Branchstable.forEach(data => {
    //console.log(data);
    
    if (data.is_active == 1) {
        var companyBranchisactive = "aktif"
    } else{
        var companyBranchisactive = "non aktif"
    }
    var arrayBranchs = nomorBranchs
    nomorBranchs += 1
    htmlBranchs += '<tr><td>'+nomorBranchs+'</td><td>'+data.companybranch+'</td><td>'+data.companybranch_addr+'</td><td>'+companyBranchisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayBranchs+'" onclick="deleteBranchstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayBranchs+'" onclick="editBranchstablerow(this);" data-toggle="modal" data-target="#editBranch" >Edit</button></td></tr>'
    $("#Branchstableid").find('tbody').html(htmlBranchs).show();
});
    } else{
        htmlBranchs += '<tr><td></td><td></td><td></td><td></td><td></td></tr>'
     $("#Branchstableid").find('tbody').html(htmlBranchs).show();
    }
     
    }

    
    function editBranchstablerow(data){     
   // Branchstable.splice($(data).data('array'), 1);     
    //console.log(Branchstable);

    $('#editBranch').find('.modal-body').find("#edit_Brancharray").val($(data).data('array'));
    $('#editBranch').find('.modal-body').find("#edit_Branchname").val(Branchstable[$(data).data('array')].companybranch);
    $('#editBranch').find('.modal-body').find("#edit_Branchaddress").val(Branchstable[$(data).data('array')].companybranch_addr);
    $('#editBranch').find('.modal-body').find("#edit_Branchactif").val(Branchstable[$(data).data('array')].is_active);

    }



$(document).ready(function() {
$('#addBranchbutton').click(function(e){ //on add input button click
e.preventDefault();

//Branch name
var addBranchname = document.getElementById('add_Branchname').value

//branch address
var addBranchaddress = document.getElementById('add_Branchaddress').value

//branch active
var addBranchactif = document.getElementById('add_Branchactif')
var optionBranchactif = addBranchactif.options[addBranchactif.selectedIndex].value;
Branchstable.push({
                id_companybranch: '' ,
                id_companydetail: '' ,
                companybranch: addBranchname,
                companybranch_addr: addBranchaddress,
                is_active : optionBranchactif,
                })

console.log(Branchstable);

    let htmlBranchs = ''
    let nomorBranchs = 0

    Branchstable.forEach(data => {
    //console.log(data);
    
    if (data.is_active == 1) {
        var companyBranchisactive = "aktif"
    } else{
        var companyBranchisactive = "non aktif"
    }
    var arrayBranchs = nomorBranchs
    nomorBranchs += 1
    htmlBranchs += '<tr><td>'+nomorBranchs+'</td><td>'+data.companybranch+'</td><td>'+data.companybranch_addr+'</td><td>'+companyBranchisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayBranchs+'" onclick="deleteBranchstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayBranchs+'" onclick="editBranchstablerow(this);" data-toggle="modal" data-target="#editBranch" >Edit</button></td></tr>'
    $("#Branchstableid").find('tbody').html(htmlBranchs).show();

  
});
jQuery.noConflict();
$("#addBranch").removeClass("in");
$(".modal-backdrop").remove();
$("#addBranch").hide();
$('#addBranch').modal('hide');
     });



$('#editBranchbutton').click(function(e){ //on add input button click
e.preventDefault();

//array 
var editBrancharray = document.getElementById('edit_Brancharray').value

//Branch name
var addBranchname = document.getElementById('edit_Branchname').value

//branch address
var addBranchaddress = document.getElementById('edit_Branchaddress').value

//branch active
var addBranchactif = document.getElementById('edit_Branchactif')
var optionBranchactif = addBranchactif.options[addBranchactif.selectedIndex].value;

Branchstable[editBrancharray].companybranch = addBranchname
Branchstable[editBrancharray].companybranch_addr = addBranchaddress
Branchstable[editBrancharray].is_active = optionBranchactif


//console.log(Branchstable);

let htmlBranchs = ''
let nomorBranchs = 0

Branchstable.forEach(data => {
//console.log(data);

if (data.is_active == 1) {
    var companyBranchisactive = "aktif"
} else{
    var companyBranchisactive = "non aktif"
}
var arrayBranchs = nomorBranchs
nomorBranchs += 1
htmlBranchs += '<tr><td>'+nomorBranchs+'</td><td>'+data.companybranch+'</td><td>'+data.companybranch_addr+'</td><td>'+companyBranchisactive+'</td><td><button class="btn btn-primary btn-round" data-array="'+arrayBranchs+'" onclick="deleteBranchstablerow(this);" >Delete</button><button class="btn btn-warning btn-round" data-array="'+arrayBranchs+'" onclick="editBranchstablerow(this);" data-toggle="modal" data-target="#editBranch" >Edit</button></td></tr>'
$("#Branchstableid").find('tbody').html(htmlBranchs).show();

  
});
jQuery.noConflict();
$("#editBranch").removeClass("in");
$(".modal-backdrop").remove();
$("#editBranch").hide();
$('#editBranch').modal('hide');
     });


    });




