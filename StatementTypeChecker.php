<?php

namespace omj\financetools\statementtypecheck;

use omj\financetools\fidavista\FidavistaStatement;

class StatementTypeChecker {
    
    /**
     * Checks which type of bank statement is passed
     * Currently only FidaVista is implemented
     * ***
     * @param string $statement xml/csv or any other data
     * @return string 'fidavista', 'csv', 'isoxml', 'none'; always lowercase.
     */
    public static function getStatementType($statement) {
        
        if (FidavistaStatement::isFidaVista($statement)) {
            return 'fidavista';
        }
        
        
        return 'none';
        
    }
    
}