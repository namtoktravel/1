import java.util.Scanner;

public class mateup {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        System.out.print("เลขยกกำลังสูงสุด: ");
        int x = sc.nextInt();

        System.out.print("เลขฐาน: ");
        int n = sc.nextInt();

        int result;

        for (int y = 2; y <= x; y++) {
            result = 1;

            for (int z = 1; z <= y; z++) {
                result *= n;
            }

            System.out.println(n + "^" + y + " = " + result);
        }

        sc.close();
    }
}
