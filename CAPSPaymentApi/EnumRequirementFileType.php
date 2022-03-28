<?php
namespace CAPSPaymentApi;

/**
 * Abastract class Enum for RequirementFileType
 * @abstract
 */
abstract class EnumRequirementFileType
{
    const Passeport = "Passeport";
    const IdCard = "Id card";
    const ResidencePermit = "Residence permit";
    const Company_Kbis_extract_less_than_3_months_old = "Company Kbis extract less than 3 months old";
    const Copy_of_the_articles_of_association = "Copy of the articles of association";
    const Professional_RIB_on_behalf_of_the_individual = "Professional RIB on behalf of the individual";
    const Professional_RIB_on_behalf_of_the_legal_entity = "Professional RIB on behalf of the legal entity";
    const AG_PV = "AG PV";
    const BATICA_Certificate_of_Deposit_or_Register_Extract = "BATICA Certificate of Deposit or Register Extract";
    const List_A = "List A ";
    const FIRCOSOFT = "FIRCOSOFT";
    const Account_agreement = "Account agreement";
    const Country_questionnaire = "Country questionnaire";
    const Front_side_ID_card = "Front-side ID card";
    const Back_ID_card = "Back ID card";
}
