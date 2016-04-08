/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cabalhotas;

/**
 *
 * @author joao
 */
public class Cabalhotas {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        int cc = 1;
        while (cc<10){
            cc++;
            if (cc ==2 || cc==3 || cc ==4){
                continue;
            }
            System.out.println("cabalhota "+ cc);
            
        }
                
        
    }
    
}
