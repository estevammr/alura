class Fatorial {
  public static void main(String[] args) {

    int fatorial = 1;
    
    for (int inicio = 1; inicio <= 10; inicio++) {
      fatorial *= inicio;
      System.out.println("O fatorial de " + inicio + " é: " + fatorial);
    }
  }
}