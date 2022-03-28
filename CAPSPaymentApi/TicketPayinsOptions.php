<?php

namespace CAPSPaymentApi;

/**
 * Description of TicketPayinsOptions class. Used for call api /payin/ticket
 *
 */
class TicketPayinsOptions
{
    /**
     * transactionId. Id of the transaction. Must be a card transaction. (required)
     * @var string $transactionId Id of the transaction. Must be a card transaction. (required)
     */
    public $transactionId;

    /**
     * format. Ticket format : J JSON, P : PDF (required)
     * @var string $format Ticket format : J JSON, P : PDF (required)
     */
    public $format;

    /**
     * type. Ticket type : C client, M : merchant (required)
     * @var string $type Ticket type : C client, M : merchant (required)
     */
    public $type;

     /**
     * message. Message to set in the bottom of the ticket.
     * @var string $message Message to set in the bottom of the ticket.
     */
    public $message;

    /**
     * Constructor
     * @param string $transactionId
     * @param string $reference
     */
    public function __construct(
        $transactionId,
        $format,
        $type,
        $message = ""
    ) {
        $this->transactionId = $transactionId;
        $this->format = $format;
        $this->type = $type;
        $this->message = $message;
    }
}
