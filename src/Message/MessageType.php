<?php

declare(strict_types=1);

namespace KWedrowicz\JobCommunication\Message;

class MessageType
{
    const SEND_MAIL = 'send_mail';
    const SEND_SMS = 'send_sms';
    const MAIL_SENT = 'mail_sent';
    const SMS_SENT = 'sms_sent';
    const MAIL_NOT_SENT = 'mail_not_sent';
    const SMS_NOT_SENT = 'sms_not_sent';
    const INSERT_USER_DOCUMENT = 'insert_user_document';
    const DELETE_USER_DOCUMENT = 'delete_user_document';
}
