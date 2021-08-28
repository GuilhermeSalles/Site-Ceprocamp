$("#seeAnotherField").change(function () {
    if ($(this).val() == "Diretoria") {
        //Div Diretoria
        $('#diretDiv').show();
        $('#fieldDire').attr('required', '');
        $('#fieldDire').attr('data-error', 'This field is required.');
        //Div Area
        $('#areaDiv').hide();
        $('#fieldArea').attr('required', '');
        $('#fieldArea').attr('data-error', 'This field is required.');
        //Div Recursos
        $('#rectDiv').hide();
        $('#fieldRe').removeAttr('required');
        $('#fieldRe').removeAttr('data-error');
        //Div Programas
        $('#ProDiv').hide();
        $('#fieldPro').attr('required', '');
        $('#fieldPro').attr('data-error', 'This field is required.');
        //Div Unidades
        $('#UniDiv').hide();
        $('#fieldUni').attr('required', '');
        $('#fieldUni').attr('data-error', 'This field is required.');


    } else if ($(this).val() == "Recursos") {
        //Div Recursos
        $('#rectDiv').show();
        $('#fieldRe').attr('required', '');
        $('#fieldRe').attr('data-error', 'This field is required.');
        //Div Area
        $('#areaDiv').hide();
        $('#fieldArea').attr('required', '');
        $('#fieldArea').attr('data-error', 'This field is required.');
        //Div Diretoria
        $('#diretDiv').hide();
        $('#fieldDire').removeAttr('required');
        $('#fieldDire').removeAttr('data-error');
        //Div Programas
        $('#ProDiv').hide();
        $('#fieldPro').attr('required', '');
        $('#fieldPro').attr('data-error', 'This field is required.');
        //Div Unidades
        $('#UniDiv').hide();
        $('#fieldUni').attr('required', '');
        $('#fieldUni').attr('data-error', 'This field is required.');

    } else if ($(this).val() == "Area") {
        //Div Area
        $('#areaDiv').show();
        $('#fieldArea').attr('required', '');
        $('#fieldArea').attr('data-error', 'This field is required.');
        //Div Diretoria
        $('#diretDiv').hide();
        $('#fieldDire').removeAttr('required');
        $('#fieldDire').removeAttr('data-error');
        //Div Recursos
        $('#rectDiv').hide();
        $('#fieldRe').removeAttr('required');
        $('#fieldRe').removeAttr('data-error');
        //Div Programas
        $('#ProDiv').hide();
        $('#fieldPro').attr('required', '');
        $('#fieldPro').attr('data-error', 'This field is required.');
        //Div Unidades
        $('#UniDiv').hide();
        $('#fieldUni').attr('required', '');
        $('#fieldUni').attr('data-error', 'This field is required.');

    } else if ($(this).val() == "Programas") {
        //Div Programas
        $('#ProDiv').show();
        $('#fieldPro').attr('required', '');
        $('#fieldPro').attr('data-error', 'This field is required.');
        //Div Area
        $('#areaDiv').hide();
        $('#fieldArea').attr('required', '');
        $('#fieldArea').attr('data-error', 'This field is required.');
        //Div Diretoria
        $('#diretDiv').hide();
        $('#fieldDire').removeAttr('required');
        $('#fieldDire').removeAttr('data-error');
        //Div Recursos
        $('#rectDiv').hide();
        $('#fieldRe').removeAttr('required');
        $('#fieldRe').removeAttr('data-error');
        //Div Unidades
        $('#UniDiv').hide();
        $('#fieldUni').attr('required', '');
        $('#fieldUni').attr('data-error', 'This field is required.');

    } else if ($(this).val() == "Unidades") {
        //Div Unidades
        $('#UniDiv').show();
        $('#fieldUni').attr('required', '');
        $('#fieldUni').attr('data-error', 'This field is required.');
        //Div Area
        $('#areaDiv').hide();
        $('#fieldArea').attr('required', '');
        $('#fieldArea').attr('data-error', 'This field is required.');
        //Div Diretoria
        $('#diretDiv').hide();
        $('#fieldDire').removeAttr('required');
        $('#fieldDire').removeAttr('data-error');
        //Div Recursos
        $('#rectDiv').hide();
        $('#fieldRe').removeAttr('required');
        $('#fieldRe').removeAttr('data-error');
        //Div Programas
        $('#ProDiv').hide();
        $('#fieldPro').attr('required', '');
        $('#fieldPro').attr('data-error', 'This field is required.');
        

    } else {
        //Div Area
        $('#areaDiv').hide();
        $('#fieldArea').attr('required', '');
        $('#fieldArea').attr('data-error', 'This field is required.');
        //Div Diretoria
        $('#diretDiv').hide();
        $('#fieldDire').removeAttr('required');
        $('#fieldDire').removeAttr('data-error');
        //Div Recursos
        $('#rectDiv').hide();
        $('#fieldRe').removeAttr('required');
        $('#fieldRe').removeAttr('data-error');
        //Div Programas
        $('#ProDiv').hide();
        $('#fieldPro').attr('required', '');
        $('#fieldPro').attr('data-error', 'This field is required.');
        //Div Unidades
        $('#UniDiv').hide();
        $('#fieldUni').attr('required', '');
        $('#fieldUni').attr('data-error', 'This field is required.');

    }
});
$("#seeAnotherField").trigger("change");