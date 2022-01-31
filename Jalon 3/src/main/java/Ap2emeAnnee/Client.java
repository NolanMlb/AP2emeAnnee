package Ap2emeAnnee;

import java.util.*;

public class Client {

    //attribut
    private String numClient, raisonSociale, siren, codeApe, adresse, telClient;
    private int dureeDeplacement, distanceKm;

    //constructeur
    public Client(String numClient, String raisonSociale, String siren, String codeApe, String adresse, String telClient, int dureeDeplacement, int distanceKm) {
        this.numClient = numClient;
        this.raisonSociale = raisonSociale;
        this.siren = siren;
        this.codeApe = codeApe;
        this.adresse = adresse;
        this.telClient = telClient;
        this.dureeDeplacement = dureeDeplacement;
        this.distanceKm = distanceKm;
    }
}
