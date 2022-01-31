package Ap2emeAnnee;

public class TypeMateriel {

    //attribut
    private String referenceInterne, libelleTypeMateriel;
    Famille laFamille;

    //constructeur
    public TypeMateriel(String referenceInterne, String libelleTypeMateriel, Famille laFamille) {
        this.referenceInterne = referenceInterne;
        this.libelleTypeMateriel = libelleTypeMateriel;
        this.laFamille = laFamille;
    }

}
