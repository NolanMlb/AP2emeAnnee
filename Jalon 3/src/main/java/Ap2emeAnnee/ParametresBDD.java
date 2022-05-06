package cashcash;

public class ParametresBDD {
    private String nomUtilisateur;
    private String motDePasse;
    private String serveurBDD;
    private String driverSGBD;

    public ParametresBDD(String nomUtilisateur, String motDePasse, String serveurBDD, String driverSGBD) {
        this.nomUtilisateur = nomUtilisateur;
        this.motDePasse = motDePasse;
        this.serveurBDD = serveurBDD;
        this.driverSGBD = driverSGBD;
    }

    public ParametresBDD(){
        nomUtilisateur = "root";
<<<<<<< Updated upstream
        motDePasse = "";
        serveurBDD = "ap3";
        driverSGBD = "jdbc:mysql://localhost/";
=======
        motDePasse = "root";
        serveurBDD = "ap2eme";
        driverSGBD = "jdbc:mysql://localhost:8889/";
>>>>>>> Stashed changes
    }

    public String getNomUtilisateur() {
        return nomUtilisateur;
    }

    public void setNomUtilisateur(String nomUtilisateur) {
        this.nomUtilisateur = nomUtilisateur;
    }

    public String getMotDePasse() {
        return motDePasse;
    }

    public void setMotDePasse(String motDePasse) {
        this.motDePasse = motDePasse;
    }

    public String getServeurBDD() {
        return serveurBDD;
    }

    public void setServeurBDD(String serveurBD) {
        this.serveurBDD = serveurBD;
    }

    public String getDriverSGBD() {
        return driverSGBD;
    }

    public void setDriverSGBD(String driverSGBD) {
        this.driverSGBD = driverSGBD;
    }
}
