#!C:/Perl64/bin/Perl.exe
#!/usr/bin/perl -w


use warnings;
use DBI;
use CGI;
use CGI qw(:standard);
use CGI::Carp qw(warningsToBrowser fatalsToBrowser);
use Net::LDAP;


my $cgi=CGI->new();
my $userID=$cgi->param('username');

#$userID=uc $userID;

my $displayName;
my $telephoneNumber;
my $costLocation;
my $department;


#print header;
#print start_html(-title=>"TOOL");



my $server = "scd2ldap.siemens.net";
my $ldap = Net::LDAP->new( $server ) or die $@;
$ldap->bind;

my $result = $ldap->search(
	base   => "",
		filter => "(&(tcgid=$userID))",
);
die $result->error if $result->code;

foreach my $entry ($result->entries) {
	$displayName = $entry->get_value("displayName");
	$telephoneNumber = $entry->get_value("telephoneNumber");
	$costLocation = $entry->get_value("costLocation");
	$department = $entry->get_value("department");
}

$ldap->unbind;

#print($displayName);

my $driver = "mysql";
my $database = "userfile";
my $dsn = "DBI:$driver:database=$database";
my $userid = "root";
my $password = "";
my $dbh = DBI->connect($dsn, $userid, $password ) or die $DBI::errstr;
my $sth = $dbh->prepare("INSERT INTO array_table (userid,telephoneNumber,costLocation,displayName,department) values ('$userID','$telephoneNumber','$costLocation','$displayName','$department')");
$sth->execute() or die $DBI::errstr;
$sth->finish();


print $cgi->redirect("http://localhost/asset%20management/machineshifting.php");
