$username= Get-Item env:\USERNAME
                $sender= $username.Value+"@internal.siemens.com"

$messageParameters = @{

                Subject = "Review Replication Status _ $maildate"



                From = "$sender"

                To = "leepeng.waikhom.ext@siemens.com"

                SmtpServer = "mail-eu.ww007.siemens.net"

            }

            Send-MailMessage @messageParameters -BodyAsHtml "Attached is the status for review model replication."  -Attachments "C:\Users\Z003Y33T\Downloads\shifting_list.xls"
