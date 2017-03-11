/**
 * Created by Dylan Goodman on 29-Jan-17.
 */
var servicesJsonList = {
    'instagram': [
        {'id'   : 42,   'service'   : 'Real Instagram Followers 300K Max - $2.10'},
        {'id'   : 159,  'service'   : 'LQ Instagram Followers 5K Max - $1.10'},
        {'id'   : 152,  'service'   : 'LQ Instagram Followers (Username Only) 10K Max - $1.25'}
    ],
    'twitter' : [
        {'id'   : 1,    'service'   : 'Twitter Followers 50K Max - $1.50'}
    ]
};
updateSelectVehicleBox('instagram');
function updateSelectVehicleBox(make) {
    console.log('updating with', make);
    var listItems= "";
    for (var i = 0; i < servicesJsonList[make].length; i++){
        listItems+= "<option value='" + servicesJsonList[make][i].id + "'>" + servicesJsonList[make][i].service + "</option>";
    }
    $("select#service").html(listItems);
}

$("select#platform").on('change',function(){
    var selectedMake = $('#platform option:selected').val();
    updateSelectVehicleBox(selectedMake);
});