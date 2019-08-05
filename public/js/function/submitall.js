
segment.forEach(data => {
    //console.log(data);
    $('<option value="'+data.id_segment+'">'+data.segment_industry+'</option>').appendTo('#inputan_id_segment');
});
businesstype.forEach(data => {
    //console.log(data);
    $('<option value="'+data.id_businesstype+'">'+data.businesstype+'</option>').appendTo('#inputan_id_businesstype');
});

function SubmitAll() {  

    let inputannya = [ 'id', 'company_doe', 'id_businesstype', 'number_of_employee', 'company_phone', 'company_website', 'asset_value', 'company_annual_income', 'company_email', 'product_sold_permonth', 'company_revenue', 'company_competitor', 'id_segment', 'company_history', 'company_num_customer', 'company_culture', 'company_workinghours', 'company_budget_permonth', 'company_product_needs', 'company_last_am', 'is_active']
    
   var data = {}

   
    for (let i = 0; i < inputannya.length; i++) {
        var halo = document.getElementById("inputan_"+inputannya[i])
        if ( halo !== 'undefined' && halo !== null) {
            data[inputannya[i]] = halo.value;
        }
       
    }

    
data.Bodstable = Bodstable
data.remBodstable = remBodstable
data.Branchstable = Branchstable
data.remBranchstable = remBranchstable
data.Divisionstable = Divisionstable
data.remDivisionstable = remDivisionstable
data.Partnerstable = Partnerstable
data.remPartnerstable = remPartnerstable
data.Productstable = Productstable
data.remProductstable = remProductstable
data.Socmedstable = Socmedstable
data.remSocmedstable = remSocmedstable
data.Subsidiarystable = Subsidiarystable
data.remSubsidiarystable = remSubsidiarystable
data.Histsstable = Histsstable
data.remHistsstable = remHistsstable     
   
}