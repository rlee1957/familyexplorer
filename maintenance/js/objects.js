 
function Address(type, id)
{
this.type = type;
this.id = id;
this.prefix = "";
this.fname = "";
this.mname = "";
this.lname = "";
this.company = "";
this.address1 = "";
this.address2 = "";
this.city = "";
this.state = "";
this.zip = "";
this.country = "";
this.phone = "";
this.email = "";
}

function item(type, id, date, description, price, address)
{
this.type = type;
this.id = id;
this.date = date;
this.description = description;
this.price = price;
this.address = address;
}

function inscription_line(index, max_length, greek, value)
{
this.index = index;
this.max_length = max_length;
this.greek = greek;
this.value = value;	
}

function paver(type, id, inscription_line_max)
{
this.type = type;
this.id = id;
this.items = new Array();
this.is_gc = false;
this.inscription_line_max = inscription_line_max;
this.inscription = new Array();	
this.add_item = function(type,type, id, date, description, price, address)
	{
	this.items[this.items.length] = new item(type, id, date, description, price, address);
	}
this.add_inscription_line = function(index, max_length, greek, value)
	{
	len = this.inscription.length;
	if((len < this.inscrition_line_max)&&(!this.is_gc))
		{
		line = new inscription_line(index, max_length, greek, value);
		this.inscription[len] = line;
		}
	}
}

function order()
{
this.date="";
this.promo = 0;
this.customer = "";
this.marketing = "";
this.pavers = new Array();
this.billing = "";
this.payment = "";	
}

function customer()
{
this.id = "";
this.date = "";
this.address = "";
this.repeat = "";	
}