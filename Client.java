/* Adapter Design Pattern Example in Java */

// -------------------------------
// Target Interface
// -------------------------------
// This interface defines what the client expects.
// Any printer used by the client must implement this interface.
interface Printer {
    void print();
}

// -------------------------------
// Adaptee
// -------------------------------
// This is an existing (legacy) class.
// Its method name is incompatible with the Printer interface.
class LegacyPrinter {

    // Legacy method (does not match the target interface)
    public void printDocument() {
        System.out.println("Legacy Printer is printing a document.");
    }
}

// -------------------------------
// Adapter
// -------------------------------
// This class adapts LegacyPrinter to the Printer interface.
// It makes the legacy class compatible with the client.
class PrinterAdapter implements Printer {

    // Reference to the adaptee
    private LegacyPrinter legacyPrinter;

    // Constructor initializes the legacy printer
    public PrinterAdapter() {
        this.legacyPrinter = new LegacyPrinter();
    }

    // This method matches the Printer interface
    // Internally, it calls the legacy method
    @Override
    public void print() {
        legacyPrinter.printDocument();
    }
}

// -------------------------------
// Client Code
// -------------------------------
// The client works only with the Printer interface.
// It does not know about LegacyPrinter.
class Client {

    // Client method that uses the Printer interface
    public static void clientCode(Printer printer) {
        printer.print();
    }

    public static void main(String[] args) {
        // Using the adapter to connect client with legacy printer
        Printer adapter = new PrinterAdapter();
        clientCode(adapter);
    }
}