## msg91flow
msg91 flow  package

## installation 

update composer.json with

require : "msg91/flow": "*" and <br/>
in repositories array
{
  "type": "git",
  "url": "https://github.com/palash140/msg91flow.git"
}

## configure

1. define MSG key
define('MSG91_KEY','abc');

2. define enviornmen default staging,
define('MSG91_ENV','production')

## usage
 
create object of MSG91 class and call its methods
$msg91Obj = new MSG91();

<br/> 
 $createFlowInput=array(
    "sender_id" => "FromAPI",
    "flow_name" => "sujayf",
    "accent" => "2",
    "smsType" => "1",
    "voiceTriggerCondition" => "SMS is not delivered",
    "voiceTriggerTime" => "34",
    "flow_order" => "voice,sms",
    "voice_flow" => "sdhhd fhsfh fhsajfh fahjfh afhajh ##sdsd##",
    "receiver" => "##mobiles##",
    "message" => "TEST SUJAY TEMPLATE FIRST no ##yoyo##"
)
<br/> <br/>
$updateFlowInput=array(
    "sender_id" => "FromAPI",
    "flow_name" => "sujays",
    "flow_status" => "0",
    "smsType" => "1",
    "flow_order" => "sms,voice",
    "receiver" => "##mobiles##",
    "voice_status" => "0",
    "voice_flow" => "sdhhd fhajh ##sdsd##",
    "message" => "TEST SUJAY TEMPLATE FIRST sujay ##yoyo##"
)

<br/>

for single send sms flow input
https://docs.msg91.com/collection/msg91-api-integration/5/send-sms-via-flow/T11E36V1

<br/>
for bulk send sms flow input
https://docs.msg91.com/collection/msg91-api-integration/5/send-sms-via-flow---bulk/T29N6CRT

MSG91 has methods with respective inputs <br/> 
    createFlow($createFlowInput); <br/>
    updateFlow($flowId,$updateFlowInput); <br/> 
    getFlow($flowId); <br/>
    sendSMSViaFlow($sendSMSFlowInput);



