package TesteDevJR;

import java.util.Scanner;

public class fibonacci {
	public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Pressione Enter para imprimir os primeiros 40 numeros da sequencia de Fibonacci:");
        scanner.nextLine(); // Aguarda pressionar a tecla Enter

        int n = 40;
        int primeiro = 0, segundo = 1;

        System.out.println("Os primeiros " + n + " numeros da sequencia de Fibonacci sao:");
        System.out.print(primeiro + " " + segundo + " ");

        for (int i = 2; i < n; i++) {
            int next = primeiro + segundo;
            System.out.print(next + " ");
            primeiro = segundo;
            segundo = next;
        }

        scanner.close();
    }

}
