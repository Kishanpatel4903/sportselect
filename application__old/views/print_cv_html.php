<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./adminassets/css/font-roboto.css">
</head>
<body style="font-family: 'Roboto', sans-serif;">
<table width="850px" cellpadding="15" style="margin: 0 auto;">
	<tr>
		<td>
			<img src="./adminassets/images/logo.png" width="150px">
		</td>
		<td>
			<table>
				<tr>
					<td style="font-size: 30px;font-weight: bold;"><?= !empty($record->first_name) ? $record->first_name.' '.$record->last_name : '' ?></td>
				</tr>
				<tr>
					<td style="font-size: 20px;">center attack(football)</td>
				</tr>
				
			</table>
		</td>
	</tr>
</table>
<table width="850px" cellpadding="15" style="margin: 0 auto;background: #80b6d6;color: #fff;">
	<tr>
		<td>
			<table>
				<tr>
					<td><img src="./adminassets/images/flag.jpg" style="border-radius: 500px;width: 50px;height: 50px;"></td>
					<td style="padding-left: 15px;"><span style="padding-bottom: 5px;font-weight: bold;color: #000;">Contry</span><br><span style="color: #464646;"><?= !empty($record->country) ? $record->country : '' ?></span></td>
				</tr>
			</table>
		</td>
		<td>
			<table>
				<tr>
					<td><img src="./adminassets/images/flag.jpg" style="border-radius: 500px;width: 50px;height: 50px;"></td>
					<td style="padding-left: 15px;"><span style="padding-bottom: 5px;font-weight: bold;color: #000;">Club Name</span><br><span style="color: #464646;">Fulham</span></td>
				</tr>
			</table>
		</td>
		<td>
			<table>
				<tr>
					<td><img src="./adminassets/images/flag.jpg" style="border-radius: 500px;width: 50px;height: 50px;"></td>
					<td style="padding-left: 15px;"><span style="padding-bottom: 5px;font-weight: bold;color: #000;">Contract</span><br><span style="color: #464646;"><?= !empty($record->contract_end) ? $record->contract_end : 0 ?> Days</span></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<table width="850px" cellpadding="10" style="margin: 0 auto;color: #000;">
	<tr>
		<td style="vertical-align: top;">
			<table width="100%" cellpadding="5" style="border-collapse: collapse;">
				<tr>
					<td colspan="2" style="text-align: center;background: #f3f3f3; padding: 9px 0;font-size: 20px;font-weight: bold;text-transform: uppercase;border-top: 1px solid #ddd;border-bottom: 1px solid #ddd;">personal data</td>
				</tr>
				<tr>
					<td style="border-bottom: 1px solid #b9b9b9;font-weight:bold;">Signing Rate</td>
					<td style="border-bottom: 1px solid #b9b9b9"><?= !empty($record->offeraccept) ? ($record->offeraccept/5)*100 : '' ?>%</td>
				</tr>
				<tr>
					<td style="border-bottom: 1px solid #b9b9b9;font-weight:bold;">Reputation</td>
					<td style="border-bottom: 1px solid #b9b9b9">World class</td>
				</tr>
				<tr>
					<td style="border-bottom: 1px solid #b9b9b9;font-weight:bold;">Agent Name</td>
					<td style="border-bottom: 1px solid #b9b9b9"><?= !empty($record->agentname) ? $record->agentname : "No Agent" ?></td>
				</tr>
				<tr>
					<td style="border-bottom: 1px solid #b9b9b9;font-weight:bold;">Preferred Side</td>
					<td style="border-bottom: 1px solid #b9b9b9"><?= !empty($record->prefer_side) ? $record->prefer_side : "" ?></td>
				</tr>
				<tr>
					<td style="border-bottom: 1px solid #b9b9b9;font-weight:bold;">Position(Primary)</td>
					<td style="border-bottom: 1px solid #b9b9b9"><?= !empty($record->first_position) ? $record->first_position : "" ?></td>
				</tr>
				<tr>
					<td style="border-bottom: 1px solid #b9b9b9;font-weight:bold;">Position(Alternative)</td>
					<td style="border-bottom: 1px solid #b9b9b9"><?= !empty($record->second_position) ? $record->second_position : "" ?></td>
				</tr>
				<tr>
					<td style="border-bottom: 1px solid #b9b9b9;font-weight:bold;">Outfitter</td>
					<td style="border-bottom: 1px solid #b9b9b9"><?= !empty($record->outfitter) ? $record->outfitter : "" ?></td>
				</tr>
				<tr>
					<td style="border-bottom: 1px solid #b9b9b9;font-weight:bold;">Shoe Size</td>
					<td style="border-bottom: 1px solid #b9b9b9"><?= !empty($record->shoesize) ? $record->shoesize : "" ?> UK</td>
				</tr>
				<tr>
					<td style="border-bottom: 1px solid #b9b9b9;font-weight:bold;">Salary</td>
					<td style="border-bottom: 1px solid #b9b9b9">$<?= !empty($record->salary) ? $record->salary : "" ?> / Yearly</td>
				</tr>
			</table>
		</td>
		<td style="vertical-align: top;">
			<table width="100%" cellpadding="5" style="border-collapse: collapse;">
				<tr>
					<td colspan="2" style="text-align: center;background: #f3f3f3;padding: 9px 0;font-size: 20px;font-weight: bold;text-transform: uppercase;border-top: 1px solid #ddd;border-bottom: 1px solid #ddd;">Player Data</td>
				</tr>
				<tr>
					<td style="border-bottom: 1px solid #b9b9b9;font-weight:bold;">Availability</td>
					<td style="border-bottom: 1px solid #b9b9b9"><?= !empty($record->salary) ? $record->salary : "" ?></td>
				</tr>
				<tr>
					<td style="border-bottom: 1px solid #b9b9b9;font-weight:bold;">Living</td>
					<td style="border-bottom: 1px solid #b9b9b9">Shared</td>
				</tr>
				<tr>
					<td style="border-bottom: 1px solid #b9b9b9;font-weight:bold;">Spoken Languages</td>
					<td style="border-bottom: 1px solid #b9b9b9"><?= !empty($record->user_language) ? $record->user_language : "" ?></td>
				</tr>
				<tr>
					<td style="border-bottom: 1px solid #b9b9b9;font-weight:bold;">Family Status</td>
					<td style="border-bottom: 1px solid #b9b9b9"><?= !empty($record->family_status) ? $record->family_status : "" ?></td>
				</tr>
				<tr>
					<td style="border-bottom: 1px solid #b9b9b9;font-weight:bold;">Jersey Number</td>
					<td style="border-bottom: 1px solid #b9b9b9"><?= !empty($record->jersey_number) ? $record->jersey_number : "" ?></td>
				</tr>
				<tr>
					<td style="border-bottom: 1px solid #b9b9b9;font-weight:bold;">Status</td>
					<td style="border-bottom: 1px solid #b9b9b9">Professional</td>
				</tr>
				<tr>
					<td style="border-bottom: 1px solid #b9b9b9;font-weight:bold;">Academy</td>
					<td style="border-bottom: 1px solid #b9b9b9"><?= !empty($record->academy) ? $record->academy : "" ?></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</body>
</html>