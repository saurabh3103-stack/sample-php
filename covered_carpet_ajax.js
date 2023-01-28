function Inint_AJAX() 
{
	try 
	{ 
		return new ActiveXObject("Msxml2.XMLHTTP");  
	} 
	catch(e) 
	{} //IE
	try 
	{ 
		return new ActiveXObject("Microsoft.XMLHTTP"); 
	} 
	catch(e) {} //IE
	try 
	{ 
		return new XMLHttpRequest(); 
	} catch(e) {} //Native Javascript
	alert("XMLHttpRequest not supported");
	return null; 
};

	function depreciationLogic()
		{
			var construction_year=document.getElementById('construction_year').value;
			if(construction_year>="2003" && construction_year<="2013" )
			{
			var age_structure="Less Than 10";
			document.getElementById('age_structure').value=age_structure;
			}
			if(construction_year>="1993" && construction_year<="2002" )
			{
			var age_structure="Between 10 to 20";
			document.getElementById('age_structure').value=age_structure;
			}
			if(construction_year<="1993")
			{
			var age_structure=" ";
			document.getElementById('age_structure').value=age_structure;
			}
			
		}
		
function CarpetArea(areaType,val) 
{ 
		var roadList=document.getElementById('roadList').value;
		var constList=document.getElementById('constList').value;
		var circleListID=document.getElementById('circleListID').value;
		/*var carpet_rrv=document.getElementById('carpet_rrv').value;
		var covered_rrv=document.getElementById('covered_rrv').value;*/
	
	var req = Inint_AJAX();
	req.onreadystatechange = function () 
	{ 
		document.getElementById('totalcarpetLoader').innerHTML="<img src='images/ajax-loader.gif' />";
		if (req.readyState==4)
		{
			if (req.status==200) 
			{
				document.getElementById('totalcarpetLoader').innerHTML=" "; 
				document.getElementById(areaType).innerHTML=req.responseText; 
					if(val=="2")
				{
					var covered_rrv=document.getElementById('coverd').value;
					document.getElementById('area_rate').value=covered_rrv;
				}
				if(val=="3")
				{ var carpet_rrv=document.getElementById('carpet').value;
					document.getElementById('area_rate').value=carpet_rrv;
				}
		//alert(req.responseText);
			} 
		}
	};
	req.open("GET", "covered_carpet_form.php?data="+areaType+"&val="+val+"&roadList="+roadList+"&constList="+constList+"&circleListID="+circleListID); 
	req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=tis-620"); // set Header
	req.send(null); 
}

	function totalArea() 
	{ 
		var rent_area=document.getElementById('rent_area').value;
		var own_area=document.getElementById('own_area').value;
		var total_area=parseInt(rent_area)+parseInt(own_area);
		document.getElementById('total_area').value=total_area;
		
		var area_rate=document.getElementById('area_rate').value;
		var mrv_owner=parseFloat(own_area)*parseFloat(area_rate);
		document.getElementById('mrv_owner').value=mrv_owner;
		var mrv_rented=parseFloat(rent_area)*parseFloat(area_rate);
		document.getElementById('mrv_rented').value=mrv_rented;
		
		var arv_owner=parseFloat(mrv_owner)*parseFloat("12");
		document.getElementById('arv_owner').value=arv_owner;
		
		var arv_rented=parseFloat(mrv_rented)*parseFloat("12");
		document.getElementById('arv_rented').value=arv_rented;
		
		var age_structure=document.getElementById('age_structure').value;
		if(age_structure=="Less Than 10")
		{
		var dep="25";
		var app="25";
		document.getElementById('dep').value=dep;
		document.getElementById('app').value=app;
		}
		if(age_structure=="Between 10 to 20")
		{
		var dep="32.5";
		var app="12.5";
		document.getElementById('dep').value=dep;
		document.getElementById('app').value=app;
		}
		if(age_structure==" ")
		{
		var dep="40";
		var app="0";
		document.getElementById('dep').value=dep;
		document.getElementById('app').value=app;
		}
		
		var depreciation=parseFloat(arv_owner)*parseFloat(dep)/parseFloat("100");
		document.getElementById('depreciation').value=depreciation;
		var appreciation=parseFloat(arv_rented)*parseFloat(app)/parseFloat("100");
		document.getElementById('appreciation').value=appreciation;
		
		var net_owner_value=parseFloat(arv_owner)-parseFloat(depreciation);
		document.getElementById('net_owner_value').value=net_owner_value;
		var net_rented_value=parseFloat(arv_rented)+parseFloat(appreciation);
		document.getElementById('net_rented_value').value=net_rented_value;
		
		var total_ARV=parseFloat(net_owner_value)+parseFloat(net_rented_value);
		document.getElementById('total_ARV').value=total_ARV;
		
		var total_tax=parseFloat(total_ARV)*parseFloat("13")/parseFloat("100");
		document.getElementById('total_tax').value=total_tax;
	}
	
	function totalAreaaOwn()
	{
	var c_a_of_rooms_own=document.getElementById('c_a_of_rooms_own').value;
	var store_c_area_own=document.getElementById('store_c_area_own').value;
	var garage_carpet_area_own=document.getElementById('garage_carpet_area_own').value;
	var total_own_area=parseInt(c_a_of_rooms_own)+parseInt(store_c_area_own)+parseInt(garage_carpet_area_own);
	document.getElementById('total_own_area').value=total_own_area;
	
	var area_rate=document.getElementById('area_rate').value;
		
		var mrv_owner=parseFloat(total_own_area)*parseFloat(area_rate);
		document.getElementById('mrv_owner').value=mrv_owner;
		
		var arv_owner=parseFloat(mrv_owner)*parseFloat("12");
		document.getElementById('arv_owner').value=arv_owner;
		
		
		var age_structure=document.getElementById('age_structure').value;
		if(age_structure=="Less Than 10")
		{
		var dep="25";
		var app="25";
		}
		if(age_structure=="Between 10 to 20")
		{
		var dep="32.5";
		var app="12.5";
		}
		if(age_structure==" ")
		{
		var dep="40";
		var app="0";
		}
		var depreciation=parseFloat(arv_owner)*parseFloat(dep)/parseFloat("100");
		document.getElementById('depreciation').value=depreciation;
		
		var net_owner_value=parseFloat(arv_owner)-parseFloat(depreciation);
		document.getElementById('net_owner_value').value=net_owner_value;
		
		var net_rented_value=document.getElementById('net_rented_value').value;
		var total_ARV=parseFloat(net_owner_tax)+parseFloat(net_rented_tax);
		document.getElementById('total_ARV').value=total_ARV;
		
		
		}
	
	function totalAreaaRent()
	{
		
	var c_a_of_rooms_rent=document.getElementById('c_a_of_rooms_rent').value;
	var store_c_area_rent=document.getElementById('store_c_area_rent').value;
	var garage_carpet_area_rent=document.getElementById('garage_carpet_area_rent').value;
	var total_rent_area=parseInt(c_a_of_rooms_rent)+parseInt(store_c_area_rent)+parseInt(garage_carpet_area_rent);
	document.getElementById('total_rent_area').value=total_rent_area;
	
		var area_rate=document.getElementById('area_rate').value;
		var area_rate=document.getElementById('area_rate').value;
		
		var mrv_rented=parseFloat(total_rent_area)*parseFloat(area_rate);
		document.getElementById('mrv_rented').value=mrv_rented;
		
		var arv_rented=parseFloat(mrv_rented)*parseFloat("12");
		document.getElementById('arv_rented').value=arv_rented;
		
		var age_structure=document.getElementById('age_structure').value;
		if(age_structure=="Less Than 10")
		{
		var dep="25";
		var app="25";
		}
		if(age_structure=="Between 10 to 20")
		{
		var dep="32.5";
		var app="12.5";
		}
		if(age_structure==" ")
		{
		var dep="40";
		var app="0";
		}
		var appreciation=parseFloat(arv_rented)*parseFloat(app)/parseFloat("100");
		document.getElementById('appreciation').value=appreciation;
		
		var net_rented_value=parseFloat(arv_rented)+parseFloat(appreciation);
		document.getElementById('net_rented_value').value=net_rented_value;
	
		var net_owner_value=document.getElementById('net_owner_value').value;
		var total_ARV=parseFloat(net_owner_value)+parseFloat(net_rented_value);
		document.getElementById('total_ARV').value=total_ARV;
		}
	function commercialTax()
	{
		var cost_of_constraction=document.getElementById('cost_of_constraction').value;
		var cost_of_land=document.getElementById('cost_of_land').value;
		var deprication=document.getElementById('deprication').value;
		var total_cost=parseFloat(cost_of_constraction)+parseFloat(cost_of_land)-parseFloat(deprication);
		document.getElementById('total_cost').value=total_cost;
		
		var commercial_arv=parseFloat(total_cost)*parseFloat("7")/parseFloat("100");
		document.getElementById('commercial_arv').value=commercial_arv;
		
		var commercial_tax=parseFloat(commercial_arv)*parseFloat("13")/parseFloat("100");
		document.getElementById('commercial_tax').value=commercial_tax;
		
		var residential_tax=document.getElementById('total_tax').value;
		var commercial_tax=document.getElementById('commercial_tax').value;
		var full_total_tax=parseFloat(residential_tax)+parseFloat(commercial_tax);
		document.getElementById('full_total_tax').value=full_total_tax;
	}
	
	function abc(areaType,val) 
{ 
	var req = Inint_AJAX();
	req.onreadystatechange = function () 
	{ 
		document.getElementById('totalcarpetLoader').innerHTML="<img src='images/ajax-loader.gif' />";
		if (req.readyState==4)
		{
			if (req.status==200) 
			{
				document.getElementById('totalcarpetLoader').innerHTML=" "; 
				document.getElementById(areaType).innerHTML=req.responseText; 
					
		//alert(req.responseText);
			} 
		}
	};
	req.open("GET", "covered_carpet_form.php?data="+areaType+"&val="+val); 
	req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=tis-620"); // set Header
	req.send(null); 
}

	function propertyno(propertyfortype,val) 
{  
	var req = Inint_AJAX();
	req.onreadystatechange = function () 
	{ 
		document.getElementById('propertyLoader').innerHTML="<img src='images/ajax-loader.gif' />";
		if (req.readyState==4)
		{
			if (req.status==200) 
			{
				document.getElementById('propertyLoader').innerHTML=" "; 
				document.getElementById(propertyfortype).innerHTML=req.responseText; 
					
		//alert(req.responseText);
			} 
		}
	};
	req.open("GET", "covered_carpet_form.php?data="+propertyfortype+"&propno="+val); 
	req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=tis-620"); // set Header
	req.send(null); 
}
