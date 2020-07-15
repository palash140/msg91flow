# msg91flow
msg91 flow  package

installation :

    update composer.json with

    require : "msg91/flow": "*" and
    in repositories array
    {
      "type": "git",
      "url": "https://github.com/palash140/msg91flow.git"
    }



1. define MSG key
define('MSG91_KEY','abc');

2. define enviornmen default staging,
define('MSG91_ENV','production')

3. create object of MSG91 class and call its methods
    $msg91Obj = new MSG91();

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


    for single send sms flow input
    https://docs.msg91.com/collection/msg91-api-integration/5/send-sms-via-flow/T11E36V1

    for bulk send sms flow input
    https://docs.msg91.com/collection/msg91-api-integration/5/send-sms-via-flow---bulk/T29N6CRT

    MSG91 has methods with respective inputs
    createFlow($createFlowInput);
    updateFlow($flowId,$updateFlowInput);
    getFlow($flowId);
    sendSMSViaFlow($sendSMSFlowInput);



