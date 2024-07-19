const { MongoClient } = require('mongodb');

const uri = 'mongodb://localhost:27017';
const client = new MongoClient(uri, { useNewUrlParser: true, useUnifiedTopology: true });

async function connectToDatabase() {
  try {
    await client.connect();
    console.log('Connected to MongoDB');
  } catch (error) {
    console.error('Error connecting to MongoDB', error);
  }
}

// Function to insert a new client
async function insertClient(clientData) {
  try {
    const database = client.db('legalease');
    const clientsCollection = database.collection('client');

    const result = await clientsCollection.insertOne(clientData);
    console.log(`Client inserted with ID: ${result.insertedId}`);
  } catch (error) {
    console.error('Error inserting client', error);
  }
}

// Function to get all clients
async function getAllClients() {
  try {
    const database = client.db('legalease');
    const clientsCollection = database.collection('client');

    const clients = await clientsCollection.find({}).toArray();
    console.log('All Clients:', clients);
    return clients;
  } catch (error) {
    console.error('Error getting clients', error);
    return [];
  }
}

// Similar functions for other tables...

// Function to insert a new lawyer
async function insertLawyer(lawyerData) {
  try {
    const database = client.db('legalease');
    const lawyersCollection = database.collection('lawyer');

    const result = await lawyersCollection.insertOne(lawyerData);
    console.log(`Lawyer inserted with ID: ${result.insertedId}`);
  } catch (error) {
    console.error('Error inserting lawyer', error);
  }
}

// Function to get all lawyers
async function getAllLawyers() {
  try {
    const database = client.db('legalease');
    const lawyersCollection = database.collection('lawyer');

    const lawyers = await lawyersCollection.find({}).toArray();
    console.log('All Lawyers:', lawyers);
    return lawyers;
  } catch (error) {
    console.error('Error getting lawyers', error);
    return [];
  }
}

// Similar functions for category, booking, payment, feedback...

// Call connectToDatabase to establish the connection
connectToDatabase();

// Example usage
// Uncomment and adjust accordingly
/*
insertClient({
  FirstName: 'John',
  LastName: 'Doe',
  Email: 'john.doe@example.com',
});

getAllClients();

insertLawyer({
  FirstName: 'Alice',
  LastName: 'Wonder',
  PracticeAreas: ['Criminal Law', 'Family Law'],
});

getAllLawyers();
*/

// Close the MongoDB connection when done
// client.close();
