package Ap2emeAnnee;

import java.sql.Date;

public class ContratMaintenance {

    //attribut
    private String numContrat;
    private Date dateSignature, dateEchange;

    //constructeur
    public ContratMaintenance(String numContrat, Date dateSignature, Date dateEchange) {
        this.numContrat = numContrat;
        this.dateSignature = dateSignature;
        this.dateEchange = dateEchange;
    }
}
