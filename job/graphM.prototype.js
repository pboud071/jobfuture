function draw(g, job_id){
	this.id=g.divID;
	this.htmlString='';
	this.htmlString='<div id="ag-head-'+this.id+'" class="ag-head"></div>';
	this.htmlString+='<div id="ag-gLeft-'+this.id+'" class="ag-gLeft"><div id="ag-graph-'+this.id+'" class="ag-graph"><div id="ag-dump-'+this.id+'" class="ag-dump">No Data to display :]</div></div>';
	this.htmlString+='<div id="x-title-1-'+this.id+'" class="x-title"></div><div id="x-title-2-'+this.id+'" class="x-title"></div><div id="x-title-3-'+this.id+'" class="x-title"></div><div id="x-title-4-'+this.id+'" class="x-title"></div><div id="x-title-5-'+this.id+'" class="x-title"></div><div id="x-title-6-'+this.id+'" class="x-title"></div><div id="x-title-7-'+this.id+'" class="x-title"></div><div id="x-title-8-'+this.id+'" class="x-title"></div><div id="x-title-9-'+this.id+'" class="x-title"></div><div id="x-title-10-'+this.id+'" class="x-title"></div><div id="x-title-11-'+this.id+'" class="x-title"></div><div id="x-title-12-'+this.id+'" class="x-title"></div></div>';
	this.htmlString+='<div id="ag-gSidebar-'+this.id+'" class="ag-gSidebar"><h3></h3><div id="ag-max-'+this.id+'"></div><div id="ag-min-'+this.id+'"></div><div id="ag-avg-'+this.id+'"></div><h4 id="note-title-'+this.id+'">Note</h4><div id="note-content-'+this.id+'">Little note about this graph goes here.. </div></div>';

	$(g.divID).innerHTML=this.htmlString;
	$(g.divID).setStyle({height:'300px'});
	$('ag-dump-'+this.id).innerHTML='Loading...';
	
	if(g.ShowNote=='yes'){
		$('note-title-'+this.id).setStyle({display:'block'});
		$('note-content-'+this.id).setStyle({display:'block'});
		$('note-title-'+this.id).update(g.NoteTitle);
		$('note-content-'+this.id).update(g.NoteText);
	}		
	new Ajax.Request('number_generator.php', {
	

	parameters: {id:g.divID, job_id:job_id},
	
	// if we get any response:
	onSuccess: function(transport) { //
		
		var RESP = eval('(' + transport.responseText + ')');
	  $('ag-dump-'+this.id).innerHTML='';
	  var gr = new Graph(RESP.num,this.id);
		this.i=1;
		RESP.xTitle.each(function(itm){
			$('x-title-'+i+'-'+this.id).update(itm);
			i=i+1;
		});

	 	$('ag-dump-'+this.id).innerHTML+=gr.returnHTML;
		$('ag-head-'+this.id).update('Move mouse over graph bars to show values')
		$('ag-max-'+this.id).update('Max: '+gr.max);	 
		$('ag-min-'+this.id).update('Min: '+gr.min);
		$('ag-avg-'+this.id).update('Avg: '+gr.avg);
	}// onSuccess end
			
	});// Ajax.Request end
		
}	

var gShow=function(elmnt,num,cnt,id){
	
	$('ag-head-'+id).update('value: '+num);
	$(elmnt).setStyle({background:'url(bar-active-bg.png) repeat-y'});
	$('x-title-'+cnt+'-'+id).setStyle({background:'#e1e1e1',color:'#414141'});
	
}

var gHide=function(elmnt,cnt,id){
	
	$('ag-head-'+id).update('');
	$(elmnt).setStyle({background:'url(bar-bg.png) repeat-y'});
	$('x-title-'+cnt+'-'+id).setStyle({background:'#ffffff',color:'#898989'});

}


var Graph = Class.create();

Graph.prototype = {
	initialize:function(data,id){
		this.data=data;
		this.id=id;
		this.max=Array.max(data);
		this.min=Array.min(data);
		this.avg=Array.avg(data);
		console.log(this.avg);
		this.returnHTML=this.unfold(data);
		
	},
	
	unfold: function(da){
		this.len= da.length;
		this.tmp='';
		for (i=0;i<this.len;i++){
			this.scaled=Math.round(0.1 * (500/(this.max - this.min) * (da[i]-this.avg)));
			this.mtop=200-this.scaled-(this.avg);
			this.counter=i+1;
			/*this.avg+=da[i];*/
			this.tmp+='<div style="height:'+(this.scaled+(this.avg))+'px;margin-top:'+this.mtop+'px;" class="m-bar" onmouseover="gShow(this,'+da[i]+','+this.counter+',\''+this.id+'\');" onmouseout="gHide(this,'+this.counter+',\''+this.id+'\');"></div>';							
		}
		/*
		this.avg=Math.round(this.avg/this.counter);
		
		this.storeAvg(this.avg);
		*/
		return this.tmp;
	},
	storeAvg:function(data){
		this.avg=data;
	}
}

Array.max = function( array ){
    return Math.max.apply( Math, array );
};

Array.min = function( array ){
    return Math.min.apply( Math, array );
};

Array.avg = function ( array ) {
	var sum = 0.0;
	console.log(array.length);
	for (i=0;i<array.length;i++) {
		sum = sum + parseFloat(array[i]);
	}
	console.log(sum);
	return sum/array.length;
}






