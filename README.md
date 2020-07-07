# msg91flow
msg91 flow  package

1. define MSG key
define('MSG91_KEY','abc');

2. define enviornmen default staging,
define('MSG91_ENV','production')

3. create object of MSG91 class and call its methods
    $msg91Obj = new MSG91();

    MSG91 has methods with respective inputs
    createFlow();
    updateFlow();
    getFlow();
    getFlows();
    sendSMSViaFlow();



