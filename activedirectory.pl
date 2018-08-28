use Win32::OLE;


sub get_scd_for_SGRE{
my ($userID)=@_;
$userID=uc $userID;
my @scd_details;
$conn = Win32::OLE->CreateObject("ADODB.Connection");
$conn->{ConnectionString} = "Provider=ADSDSOObject";
$conn->open;
$rs = Win32::OLE->CreateObject("ADODB.RecordSet");
$rs->open("SELECT department,l,mail,c,tcgid,displayName FROM 'LDAP://scd2ldap.siemens.net:389' WHERE objectClass='person' AND tcgid='$userID'",$conn);
my $record_found=$rs->{RecordCount};
if ($record_found){
until ($rs->EOF){
for($fieldNum = 0; $fieldNum < $rs->Fields->{Count}; $fieldNum++){
$fieldName = $rs->Fields($fieldNum)->{Name};
$fieldValue = $rs->Fields($fieldNum)->{Value};

if (($fieldName eq "mail") or ($fieldName eq "l")){
#print "$fieldName: @$fieldValue\n";
push @scd_details,@$fieldValue;
}
else{
#print "$fieldName: $fieldValue\n";
push @scd_details,$fieldValue;
}
}
#print "\n";
$rs->MoveNext;
}
}
else{
#print "No record found\n";
push @scd_details,"No record found\n";
}
return @scd_details;
}
1
