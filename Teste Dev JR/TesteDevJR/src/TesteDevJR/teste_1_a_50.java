package TesteDevJR;

// Este programa ecreve de 1 a 50.
// Para os multiplos de 3 escreve Fizz.
// Para os multiplos de 5 escreve Buzz.
// Para os multiplos de ambos escreve FizzBuzz.

import java.util.Scanner;

public class teste_1_a_50 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Pressione Enter para iniciar:");
        scanner.nextLine(); // Aguarda pressionar a tecla Enter

        for (int i = 1; i <= 50; i++) {
            if (i % 3 == 0 && i % 5 == 0) {
                System.out.println("FizzBuzz"); // Escrever FizzBuzz para os multiplos de 3 e 5.
            } else if (i % 3 == 0) {
                System.out.println("Fizz"); // Escrever Fizz para os Multiplos de 3.
            } else if (i % 5 == 0) {
                System.out.println("Buzz"); // Escrever Buzz para os Multiplos de 5.
            } else {
                System.out.println(i);
            }
        }

        scanner.close();
    }
}
