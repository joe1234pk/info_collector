<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%"><tbody><tr><td valign="top" style="padding:0cm 0cm 0cm 0cm"><div align="center"><table class="MsoNormalTable" border="1" cellspacing="0" cellpadding="0" width="0" style="width:450.0pt;background:#FDFDFD;border:solid gainsboro 1.0pt"><tbody><tr><td valign="top" style="border:none;padding:0cm 0cm 0cm 0cm"><div align="center"><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:450.0pt;background:#D8180E"><tbody><tr><td style="padding:0cm 0cm 0cm 0cm"><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:450.0pt"><tbody><tr>
	<td width="50%" style="width:50.0%;padding:0cm 15.0pt 0cm 15.0pt"><p class="MsoNormal"><a href="https://tomatotravel.com.au" target="_blank" title="This external link will open in a new window"><span style="border:none windowtext 1.0pt;padding:0cm;text-decoration:none">
		<!-- <img border="0" width="104" id="_x0000_i1025" src=""> -->
	</span></a></p></td>
	<td width="50%" style="width:50.0%;padding:7.5pt 15.0pt 0cm 0cm"><p class="MsoNormal" align="right" style="text-align:right"><a href="https://tomatotravel.com.au" id="template_header_logo_exclusives" target="_blank" title="This external link will open in a new window"><span style="border:none windowtext 1.0pt;padding:0cm;text-decoration:none"><img border="0" width="136" id="_x0000_i1026" src="https://exclusives.webjet.com.au/wp-content/themes/webjetau/img/emails/exclusives-logo.png"></span></a></p></td>
</tr></tbody></table></td></tr><tr><td style="padding:0cm 15.0pt 0cm 15.0pt"><h2 align="center" style="margin:0cm;margin-bottom:.0001pt;text-align:center;line-height:150%;text-shadow:0 1px 0 #e0463e"><span style="font-size:22.5pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;color:white">Booking Notification </span></h2></td></tr></tbody></table></div></td></tr><tr><td valign="top" style="border:none;padding:0cm 0cm 0cm 0cm"><div align="center"><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:450.0pt" id="template_body"><tbody><tr><td valign="top" style="background:#FDFDFD;padding:0cm 0cm 0cm 0cm;-webkit-border-radius:0 !important;border-radius:0 !important"><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%"><tbody><tr><td valign="top" style="padding:15.0pt 15.0pt 15.0pt 15.0pt"><p style="line-height:150%"><span style="font-size:10.5pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;color:#737373">Hi,</span></p><p style="line-height:150%"><span style="font-size:10.5pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;color:#737373">We have received the following Booking request on Webjet Exclusives. </span></p><table class="MsoNormalTable" border="1" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border:solid #DDDDDD 1.0pt">
	<tbody>
		<tr>
			<td style="border:none;padding:7.5pt 7.5pt 7.5pt 7.5pt">
				<div><p class="MsoNormal" style="line-height:15.0pt"><strong>
					<span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">Deal: </span></strong>
					<span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">{{$deal}}</span></p></div><div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">Product: </span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">{{$product}}</span></p></div>
					<div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">Voucher(s):</span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333"></span></p></div>

					<div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333">Service Date: </span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#009900">
						{{$departure_date}}
					</span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333"></span></p></div>
	

	</td></tr></tbody></table><h3 style="line-height:150%"><span style="font-family:&quot;Arial&quot;,sans-serif;color:#737373">Traveller Details:</span></h3><table class="MsoNormalTable" border="1" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;border:solid #DDDDDD 1.0pt"><tbody><tr><td style="border:none;padding:7.5pt 7.5pt 7.5pt 7.5pt">
		@if($passengers)
 		@foreach($passengers as $key=>$passenger)
	<div style="mso-element:para-border-div;border:none;border-bottom:solid #EEEEEE 1.0pt;padding:0cm 0cm 0cm 0cm"><h4 style="line-height:15.0pt;border:none;padding:0cm"><span style="font-family:&quot;Arial&quot;,sans-serif;color:#333333">Traveller {{ $key+1 }} - Details As Per Passport</span></h4></div>
	<div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#888888;font-weight:normal">Title  </span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#009900">{{$passenger['title']}}.</span></p></div>
	<div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#888888;font-weight:normal">First Name  </span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#009900">{{$passenger['given_name']}} </span></p></div>
	<div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#888888;font-weight:normal">Last Name  </span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#009900">{{$passenger['surname']}}</span></p></div>
	<div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#888888;font-weight:normal">Phone Number  </span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#009900">{{$passenger['mobile']}}</span></p></div>
	<div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#888888;font-weight:normal">Email Address  </span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#009900"><a href="javascript:void(0);" _to="dr.leo.d.gun@gmail.com" _cc="" _bcc="" _subject="" _body="" onclick="Webmail.Widgets.Email.Message.evAddressClick(this);">{{$passenger['email']}}</a></span></p></div>
	<div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#888888;font-weight:normal">Middle Name (If you do not have a middle name please place N/A in the box)  </span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#009900">{{$passenger['mid_name']}}</span></p></div>
	<div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#888888;font-weight:normal">Date of Birth  </span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#009900">{{$passenger['birth_date']}}</span></p></div>
	<div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#888888;font-weight:normal">Emergency Contact Information - Name &amp; Phone Number (not the person you are travelling with)  </span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#009900">{{$passenger['emgcy_contact']}}</span></p></div>
	<div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#888888;font-weight:normal">Passport Number  </span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#009900">{{$passenger['passport_num']}}</span></p></div>
	<div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#888888;font-weight:normal">Nationality of Passport  </span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#009900">{{$passenger['passport_nationality']}}</span></p></div>
	<div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#888888;font-weight:normal">Passport Date of Issue  </span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#009900">{{$passenger['passport_date_of_issue']}}</span></p></div>
	<div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#888888;font-weight:normal">Passport Expiry Date  </span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#009900">{{$passenger['passport_expiry_date']}}</span></p></div>
	<div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#888888;font-weight:normal">Place of Birth  </span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#009900"> {{$passenger['place_of_birth']}}</span></p></div>
	<div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#888888;font-weight:normal">Current Address  </span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#009900"> {{$passenger['address']}}</span></p></div>
	<div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#888888;font-weight:normal">Suburb  </span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#009900"> {{$passenger['address_sub']}}</span></p></div>
	<div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#888888;font-weight:normal">Postcode  </span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#009900"> {{$passenger['address_postcode']}}</span></p></div>
	<div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#888888;font-weight:normal">State  </span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#009900"> {{$passenger['address_state']}}</span></p></div>
	@endforeach
	@endif

	<div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#888888;font-weight:normal">Bedding Configuration </span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#009900">{{$bedding_config}}</span></p></div> 

	<div style="mso-element:para-border-div;border:none;border-bottom:solid #EEEEEE 1.0pt;padding:0cm 0cm 0cm 0cm"><h4 style="line-height:15.0pt;border:none;padding:0cm"><span style="font-family:&quot;Arial&quot;,sans-serif;color:#333333">Flight Variations</span></h4></div><div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#888888;font-weight:normal">Arrival as per itinerary will apply if no selection is made </span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#009900"></span></p></div><div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#888888;font-weight:normal">Departure as per itinerary will apply if no selection made </span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#009900"></span></p></div><div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#888888;font-weight:normal">Requested class of travel - Economy will apply if no selection is made </span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#009900"></span></p></div><div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#888888;font-weight:normal">Preferred Airline - Promotional Airfare will apply if no selection is made </span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#009900"></span></p></div><div style="mso-element:para-border-div;border:none;border-bottom:solid #EEEEEE 1.0pt;padding:0cm 0cm 0cm 0cm"><h4 style="line-height:15.0pt;border:none;padding:0cm"><span style="font-family:&quot;Arial&quot;,sans-serif;color:#333333">Special Requests</span></h4></div><div><p class="MsoNormal" style="line-height:15.0pt"><strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#888888;font-weight:normal">Special Requests </span></strong><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#009900"></span></p></div></td></tr></tbody></table><p class="MsoNormal" style="line-height:150%"><span style="font-size:10.5pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;color:#737373;display:none">&nbsp;</span></p><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%"><tbody><tr><td style="padding:4.5pt 4.5pt 4.5pt 4.5pt"><p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif;color:#737373">
		<br><br>Tomata Travel Pty Ltd<br>Level 1, 403 Elizabeth Street, Surry Hills,<br> Sydney <br>NSW 2010<br>ABN: 84 063 430 848</span></p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></div></td></tr><tr><td valign="top" style="border:none;padding:0cm 0cm 0cm 0cm"><div align="center"><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:450.0pt;-webkit-border-radius:6px" id="template_footer"><tbody><tr><td valign="top" style="padding:7.5pt 7.5pt 7.5pt 7.5pt" id="credit"><table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%"><tbody><tr><td style="padding:7.5pt 7.5pt 7.5pt 7.5pt"><p align="center" style="text-align:center;line-height:125%"><span style="font-size:9.0pt;line-height:125%;font-family:&quot;Arial&quot;,sans-serif;color:#E8746E">Tomato Travel</span></p></td></tr></tbody></table></td></tr></tbody></table></div></td></tr></tbody></table></div></td></tr></tbody></table>